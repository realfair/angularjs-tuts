<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

<p>Try to change the names.</p>

<div ng-app="myApp" ng-controller="myCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<button type="submit" ng-click="testData()">CLICK ME</button>
<br>
Full Name: {{firstName + " " + lastName}}

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    $scope.firstName= "John";
    $scope.lastName= "Doe";
    $scope.testData=function(){
		$http.get("http://localhost/tv1/articles.php")
			 .then(function(data){
			 	console.log(data);
			 	var obj = JSON.parse(data);
			 });
		}
});
</script>

</body>
</html>