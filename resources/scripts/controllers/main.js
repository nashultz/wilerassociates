'use strict';

/**
 * @ngdoc function
 * @name developApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the developApp
 */
angular.module('developApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
