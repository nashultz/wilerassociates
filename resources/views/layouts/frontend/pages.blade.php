<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wiler &amp; Associates, Inc.</title>
    <meta name="description" content="">
    <meta name="authors" content="Nathon Shultz, Roman Lopez">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript">@yield('extrascripts')</script>

</head>
<body>
    @include('layouts.frontend.partials.nav')
    @include('layouts.frontend.partials.errors')
    @yield('content')
    @include('layouts.frontend.partials.footer')
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dropdown.js"></script>

</body>
</html>