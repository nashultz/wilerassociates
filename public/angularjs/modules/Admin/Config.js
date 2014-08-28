angular.module('Admin').config(function($routeProvider) {

	$routeProvider.when('/admin', {
		redirectTo: '/auth/login'
	});

});