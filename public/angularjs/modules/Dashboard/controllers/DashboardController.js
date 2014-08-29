angular.module('Dashboard').controller('DashboardController', function($scope, AuthService, UserService) {

	// Get the User
	AuthService.fetchAuthUser().then(function(response) {
		$scope.user = response.data.user;
	});

	// Fetch User Count
	UserService.fetchUserCount().then(function(response) {
		console.log(response);
		$scope.user_count = response.data.count;
	});

});

