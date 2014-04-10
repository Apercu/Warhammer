angular.module('war').controller('GameCtrl', function ($scope, $http) {

	$http.get('/php/init.php').then(function (res) {
		console.log(res);
	});

});
