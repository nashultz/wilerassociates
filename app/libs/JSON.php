<?php

	class JSON {

		public static function accessDenied($code = 400)
		{
			return Response::json( [ 'message' => 'Access Denied' ], $code );
		}

		public static function success($data)
		{
			return Response::json( $data, 200 );
		}

		public static function failure($message, $code = 400)
		{
			return Response::json( [ 'message' => $message ], $code );
		}

	}

?>