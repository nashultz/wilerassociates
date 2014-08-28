angular.module('Application').config(function($routeProvider) {

    $routeProvider.when('/', {
        templateUrl: '/angularjs/modules/Application/views/Welcome.blade.php',
        controller: 'ApplicationController'
    });

});

angular.module('Application').run(function($location, $route, $rootScope) {
  //editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'

	var original = $location.path;
    $location.path = function (path, reload) {
        if (reload === false) {
            var lastRoute = $route.current;
            var un = $rootScope.$on('$locationChangeSuccess', function () {
                $route.current = lastRoute;
                un();
            });
        }
        return original.apply($location, [path]);
    };	  
});