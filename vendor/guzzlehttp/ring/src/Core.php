<?php
namespace GuzzleHttp\Ring;

use GuzzleHttp\Stream\StreamInterface;

/**
 * Provides core functionality of Ring adapters and middleware.
 */
class Core
{
    /**
     * Adds a "then" function to a request that is invoked when the request
     * completes.
     *
     * If an existing "then" function is present, then a new "then" will be
     * added to the request. The new "then" function will become an aggregate
     * of the previous then function that first calls the new function followed
     * by the previous previous function.
     *
     * The provided function accepts the returned response *by reference*.
     * Modifying the passed response argument will modify the response that
     * is ultimately returned when a future is dereferenced.
     *
     * @param array    $request Request to update
     * @param callable $fn      Function to invoke on completion.
     *
     * @return array Returns a modified request array.
     */
    public static function then(array $request, callable $fn)
    {
        if (isset($request['then'])) {
            $fn = function (&$response) use ($request, $fn) {
                $fn($response);
                $then = $request['then'];
                $then($response);
            };
        }

        $request['then'] = $fn;

        return $request;
    }

    /**
     * Returns a function that calls all of the provided functions, in order,
     * passing the arguments provided to the composed function to each function.
     *
     * @param callable[] $functions Array of functions to proxy to.
     *
     * @return callable
     */
    public static function callArray(array $functions)
    {
        return function () use ($functions) {
            $args = func_get_args();
            foreach ($functions as $fn) {
                call_user_func_array($fn, $args);
            }
        };
    }

    /**
     * Derefs a response (blocks until it is complete) and returns an array
     * response.
     *
     * If the provided response is a normal response hash, it is returned.
     *
     * @param array|FutureInterface $response Response to dereference
     *
     * @return array
     */
    public static function deref($response)
    {
        return $response instanceof FutureInterface
            ? $response->deref()
            : $response;
    }

    /**
     * Gets an array of header line values from a message for a specific header
     *
     * This method searches through the "headers" key of a message for a header
     * using a case-insensitive search.
     *
     * @param array  $message Request or response hash.
     * @param string $header  Header to retrieve
     *
     * @return array
     */
    public static function headerLines(array $message, $header)
    {
        // Slight optimization for exact matches.
        if (isset($message['headers'][$header])) {
            return $message['headers'][$header];
        }

        // Check for message with no headers after the "fast" isset check.
        if (!isset($message['headers'])) {
            return [];
        }

        // Iterate and case-insensitively find the header by name.
        foreach ($message['headers'] as $name => $value) {
            if (!strcasecmp($name, $header)) {
                return $value;
            }
        }

        return [];
    }

    /**
     * Gets a header value from a message as a string or null
     *
     * This method searches through the "headers" key of a message for a header
     * using a case-insensitive search. The lines of the header are imploded
     * using commas into a single string return value.
     *
     * @param array  $message Request or response hash.
     * @param string $header  Header to retrieve
     *
     * @return string|null Returns the header string if found, or null if not.
     */
    public static function header(array $message, $header)
    {
        $match = self::headerLines($message, $header);
        return $match ? implode(', ', $match) : null;
    }

    /**
     * Returns the first header value from a message as a string or null. If
     * a header line contains multiple values separated by a comma, then this
     * function will return the first value in the list.
     *
     * @param array  $message Request or response hash.
     * @param string $header  Header to retrieve
     *
     * @return string|null Returns the value as a string if found.
     */
    public static function firstHeader(array $message, $header)
    {
        $match = self::headerLines($message, $header);

        if (!isset($match[0])) {
            return null;
        }

        // Return the match itself if it is a single value.
        if (!($pos = strpos($match[0], ','))) {
            return $match[0];
        }

        return substr($match[0], 0, $pos);
    }

    /**
     * Returns true if a message has the provided case-insensitive header.
     *
     * @param array  $message Request or response hash.
     * @param string $header  Header to check
     *
     * @return bool
     */
    public static function hasHeader(array $message, $header)
    {
        return (bool) self::headerLines($message, $header);
    }

    /**
     * Parses an array of header lines into an associative array of headers.
     *
     * @param array $lines Header lines array of strings in the following
     *                     format: "Name: Value"
     * @return array
     */
    public static function headersFromLines(array $lines)
    {
        $headers = [];

        foreach ($lines as $line) {
            $parts = explode(':', $line, 2);
            $headers[trim($parts[0])][] = isset($parts[1])
                ? trim($parts[1])
                : null;
        }

        return $headers;
    }

    /**
     * Creates a URL string from a request.
     *
     * If the "url" key is present on the request, it is returned, otherwise
     * the url is built up based on the scheme, host, uri, and query_string
     * request values.
     *
     * @param array $request Request to get the URL from
     *
     * @return string Returns the request URL as a string.
     * @throws \InvalidArgumentException if no Host header is present.
     */
    public static function url(array $request)
    {
        if (isset($request['url'])) {
            return $request['url'];
        }

        $uri = (isset($request['scheme'])
                ? $request['scheme'] : 'http') . '://';

        if ($host = self::header($request, 'host')) {
            $uri .= $host;
        } else {
            throw new \InvalidArgumentException('No Host header was provided');
        }

        if (isset($request['uri'])) {
            $uri .= $request['uri'];
        }

        if (isset($request['query_string'])) {
            $uri .= '?' . $request['query_string'];
        }

        return $uri;
    }

    /**
     * Reads the body of a message into a string.
     *
     * @param array|RingFutureInterface $message Message containing a "body" key
     *
     * @return null|string Returns the body as a string or null if not set.
     * @throws \InvalidArgumentException if a request body is invalid.
     */
    public static function body($message)
    {
        if (!isset($message['body'])) {
            return null;
        }

        if ($message['body'] instanceof StreamInterface) {
            return (string) $message['body'];
        }

        switch (gettype($message['body'])) {
            case 'string':
                return $message['body'];
            case 'resource':
                return stream_get_contents($message['body']);
            case 'object':
                if ($message['body'] instanceof \Iterator) {
                    return implode('', iterator_to_array($message['body']));
                } elseif (method_exists($message['body'], '__toString')) {
                    return (string) $message['body'];
                }
            default:
                throw new \InvalidArgumentException('Invalid request body: '
                    . self::describeType($message['body']));
        }
    }

    /**
     * Rewind the body of the provided message if possible.
     *
     * @param array $message Message that contains a 'body' field.
     *
     * @return bool Returns true on success, false on failure
     */
    public static function rewindBody(array $message)
    {
        if ($message['body'] instanceof StreamInterface) {
            return $message['body']->seek(0);
        }

        if ($message['body'] instanceof \Generator) {
            return false;
        }

        if ($message['body'] instanceof \Iterator) {
            $message['body']->rewind();
            return true;
        }

        if (is_resource($message['body'])) {
            return rewind($message['body']);
        }

        return is_string($message['body'])
            || (is_object($message['body'])
                && method_exists($message['body'], '__toString'));
    }

    /**
     * Debug function used to describe the provided value type and class.
     *
     * @param mixed $input
     *
     * @return string Returns a string containing the type of the variable and
     *                if a class is provided, the class name.
     */
    public static function describeType($input)
    {
        switch (gettype($input)) {
            case 'object':
                return 'object(' . get_class($input) . ')';
            case 'array':
                return 'array(' . count($input) . ')';
            default:
                ob_start();
                var_dump($input);
                // normalize float vs double
                return str_replace('double(', 'float(', rtrim(ob_get_clean()));
        }
    }

    /**
     * Handles calling the "then" option of a request.
     *
     * This function updates the provided "atom" by referenced, accounting for
     * return values from the "then" function and setting the atom to an
     * exception if one was encountered.
     *
     * @param array $request
     * @param       $atom
     */
    public static function callThen(array $request, &$atom)
    {
        if (!isset($request['then'])) {
            return;
        }

        try {
            $then = $request['then'];
            $then($atom);
        } catch (\Exception $e) {
            // The atom get an "error" added to it if an exception is encountered.
            $atom['error'] = $e;
        }
    }
}
