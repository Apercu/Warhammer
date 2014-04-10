angular.module('war').controller('GameCtrl', function ($scope, $http, $timeout) {

	$http.get('/php/init.php').then(function (res) {
		console.log(res);
	});

	$scope.finishTurn = function () {
		angular.element.post('/php/finish_turn.php', { action : 'finishTurn' }).success(function(response) {
			console.log(response);
		});
	};

});
