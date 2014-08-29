angular.module('Auth').service('AuthService', function($http, UserService) {

	this.attempt = function(credentials)
	{
		return $http.post('/api/v1/auth/login', credentials);
	}

	this.logout = function()
	{
		return $http.get('/api/v1/auth/logout');
	}

	this.fetchAuthUser = function()
	{
		return $http.get('/api/v1/auth/user');
	}

});
