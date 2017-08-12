var app = angular.module('attendance',[]);
app.controller('attend',function($scope,$http){

$scope.class = [];
$scope.student = [];
$scope.section = [];

$scope.present = [];

$scope.studentName = [];


$http.get('/getClasses').then(function(response){
$scope.class = response.data;
console.log($scope.class);
});



$scope.getClassStudents = function(){
	var id = $scope.classId;
	$http.get('/getClassStudents/'+id).then(function(response){
			$scope.section = response.data;
	});
}

$scope.getStudents = function(){
	var id = $scope.sectionId;
	$http.get('/getSections/'+id).then(function(response){
			$scope.student = response.data;
	});
}
/*
	$scope.insertattendance = function(){

		var selected = document.getElementById("list").value;
		console.log(selected);

	}
*/
	$scope.addAttendance = function(index){
		
		var add = $.param({
			student: $scope.studentName[index],
			present:$scope.present[index],
			classId: $scope.classId,
			section: $scope.sectionId,
			_token: $scope.token


		});
	


		$http({
			url:'/attendanceInsert',
			method: 'post',
			data: add,
			headers: {'Content-Type':'application/x-www-form-urlencoded'}
		}).then(function(response){
			 window.setTimeout(function(){window.location.reload();},1000)

			});
	
}

});

