angular.module('Dashboard').controller('DashboardController', function($scope, User) {

	$scope.users_one = User.query( { filter: 'id', sort: 'asc' });

	$scope.users_two = User.query( { filter: 'id', sort: 'desc' });

	$scope.users_three = User.query();

	$scope.users_four = User.query( { filter: 'username', sort: 'asc', limit: 2 } );

	$scope.users_stats = User.query( { stats: true } );

});

