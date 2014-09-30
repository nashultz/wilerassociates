<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wiler &amp; Associates, Inc.</title>
    <meta name="description" content="">
    <meta name="authors" content="Nathon Shultz, Roman Lopez">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/home.css" />

</head>
<body ng-app="application">
    @include('layouts.frontend.partials.nav')
    @include('layouts.frontend.partials.errors')
    <div ng-view></div>
    @include('layouts.frontend.partials.footer')
    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <!--
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    -->
    <script type="text/javascript" src="js/dropdown.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-route.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-animate.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/application.js"></script>
</body>
</html>