angular.module('war').controller('GameCtrl', function ($scope, $http, $timeout) {

	$scope.data = null;

	$http.get('/php/init.php').then(function (res) {
		$scope.data = res.data;
		//console.log($scope.data);
	});

	$scope.finishTurn = function () {
		angular.element.post('/php/finish_turn.php', { action : 'finishTurn' }).success(function(response) {
			console.log(response);
		});
	};

	$scope.text = '';

	$scope.sendData = function () {
		$scope.data[0].orientation = 2;
		angular.element.post('/php/update.php', { data : $scope.data }).success(function(response) {
			console.log(response);
		});
	}

	$scope.turnRight = function () {
		angular.element.post('/php/turning.php', { action : 'turnRight', idShip : 1 }).then(function(response) {
			console.log(response);
		});
	};

	$scope.turnLeft = function () {
		angular.element.post('/php/turning.php', { action : 'turnLeft', idShip : 1 }).then(function(response) {
			console.log(response);
		});
	};

});
