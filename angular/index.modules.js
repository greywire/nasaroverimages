angular.module('app', [
    'app.run',
	'app.filters',
	'app.services',
	'app.components',
    'app.directives',
	'app.routes',
	'app.config',
	'app.partials',
	'infinite-scroll'
]);

angular.module('infinite-scroll').value('THROTTLE_MILLISECONDS', 1000);

angular.module('app.run', []);
angular.module('app.routes', []);
angular.module('app.filters', []);
angular.module('app.services', []);
angular.module('app.config', []);
angular.module('app.directives', []);
angular.module('app.components', [
	'ui.router', 'ngMaterial', 'angular-loading-bar',
	'restangular', 'ngStorage', 'satellizer','angular.filter'
]);

