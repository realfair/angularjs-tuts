var app = angular.module('myapp', []);
app.controller('usercontroller', function($scope, $http){
	$scope.insertData = function(){
		$http.post("api/index.php",
				 {'fname':$scope.firstname , 'lname':$scope.lastname }
				 ).success(function(data){
				 	$scope.firstname=null;
				 	$scope.lastname=null;
				 	$scope.displayData();
				 	alert(data);
				 });
	}
      $scope.displayData = function(){  
           $http.get("api/index.php")  
           .success(function(data){
                $scope.names = data;  
           });  
      }
});