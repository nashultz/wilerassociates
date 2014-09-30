'use strict';

/**
 * @ngdoc function
 * @name developApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the developApp
 */
angular.module('developApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
