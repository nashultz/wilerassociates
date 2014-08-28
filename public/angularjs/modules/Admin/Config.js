angular.module('Admin').config(function($routeProvider) {

	$routeProvider.when('/admin', {
		redirectTo: '/admin/login'
	});

	$routeProvider.when('/admin/login', {
		templateUrl: '/angularjs/modules/Admin/views/Login.blade.php',
		controller: 'AdminLoginController'
	});

	$routeProvider.when('/admin/logout', {
		templateUrl: '/angularjs/modules/Admin/views/Logout.blade.php',
		controller: 'AdminLogoutController'
	});

});