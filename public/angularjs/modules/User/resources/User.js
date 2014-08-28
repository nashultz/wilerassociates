angular.module('User').service('User', function($http, $resource) {

		return $resource('api/v1/users/:UserID', { UserID: '@UserID' },  
		{
	    	'update': {method:'PUT'},
		});

});

