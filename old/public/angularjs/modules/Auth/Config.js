angular.module('Auth').config(function($routeProvider) {

    $routeProvider.when('/auth/login', {
        templateUrl: '/angularjs/modules/Auth/views/Login.blade.php',
        controller: 'AuthController'
    });

});
