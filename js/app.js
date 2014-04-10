angular.module('war', ['ngRoute']);

angular.module('war').config(function ($routeProvider) {
	$routeProvider
	.when('/', { templateUrl: 'views/main.html', controller: 'MainCtrl' })
	.when('/game', { templateUrl: 'views/game.html', controller: 'GameCtrl' });
	$routeProvider.otherwise({redirectTo: '/'});
});
