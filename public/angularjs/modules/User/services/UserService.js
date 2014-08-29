angular.module('User').service('UserService', function($http, User) {


	this.fetchUserCount = function()
	{
		return $http.get('api/v1/user/count');
	}

});
