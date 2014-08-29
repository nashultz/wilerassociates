angular.module('Auth').controller('AuthController', function($scope, $location, AuthService) {

	$scope.message = null;
	$scope.credentials = {};

	$scope.login = function()
	{
		AuthService.attempt($scope.credentials).then(function(response) {

			$location.path('dashboard');

		}, function(response) {

			$scope.message = response.data.error;

		});

	}

	$scope.logout = function()
	{
		AuthService.logout().then(function() {
			
			$location.path('/admin');

		}, function(response) {
			
			$scope.message = response.data.error;

		});
	}

});

