angular.module('User').service('User', function($http, $resource) {

		return $resource( 'api/v1/users/:UserID', { UserID: '@UserID' },  
		{
			'query': { method: 'GET', isArray: false },
	    	'update': { method: 'PUT' }
		});

});

