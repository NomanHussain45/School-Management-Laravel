var app = angular.module('student',[]);
app.controller('stude',function($scope,$http){

	$scope.class = [];
	$scope.student = [];
	$scope.sec =[];

	$http.get('/sec').then(function(response){
	$scope.sec = response.data;
	//console.log($scope.sec);
	});

	

	$http.get('/getStudentSections').then(function(response){
	$scope.class = response.data;
	//console.log($scope.class);
	});


	$scope.getSectionCLasses = function(){
	var id = $scope.classId;
	$http.get('/getSectionCLasses/'+id).then(function(response){
			$scope.section = response.data;
	});
}
$scope.getStudent = function(){
	var id = $scope.sectionId;
	$http.get('/Sectionn/'+id).then(function(response){
			$scope.student = response.data;
	});
}
	$scope.insertdata=function(){

		// if($scope.name == "")
		// {
		// 		$scope.sendForm = function () {
		// $scope.msg='Form Submited Successfully';
		// };
 
		// $scope.getClass = function (color) {
		// return color.toString();
		// }

		// }
		// else
		// {
			var add = $.param({
			class_id: $scope.classId,
			section: $scope.sectionId,
			firstname: $scope.name,
			lastname: $scope.lname,
			email: $scope.email,
			
			qualification: $scope.qualification,
			contact: $scope.contact,
			father: $scope.father,
			age: $scope.age,
			username: $scope.username,
			password: $scope.password,
			_token: $scope.token

		});

		
		$http({
			url:'/SectionAndClass',
			method: 'post',
			data: add,
			headers: {'Content-Type':'application/x-www-form-urlencoded'}
		}).then(function(response){
			 window.setTimeout(function(){window.location.reload();},1000)

				
			});
	
}

});
