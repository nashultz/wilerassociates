angular.module('Dashboard').config(function($routeProvider) {

    $routeProvider.when('/dashboard', {
        templateUrl: '/angularjs/modules/Dashboard/views/Dashboard.blade.php',
        controller: 'DashboardController'
    });

});
