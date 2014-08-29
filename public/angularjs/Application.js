//angular.module('Application', ['ngDragDrop', 'ngRoute', 'ngAnimate', 'ngResource', 'ngStorage', 'ngSanitize', 'ui.router', 'ui.bootstrap', 'xeditable', 'dialogs.main', 'dialogs.default-translations', 'pascalprecht.translate', 'angularMoment']);

// Main Application Module
angular.module('Application', [ 'ngRoute', 'ngResource', 'Admin', 'User', 'Dashboard' ] );

// Admin Module
angular.module('Admin', [ 'Auth' ] );

angular.module('Auth', [] );

angular.module('User', [] );

angular.module('Dashboard', [] );

angular.module('Application').constant('angularMomentConfig', {
    preprocess: null, // optional
    timezone: '' // optional
});

