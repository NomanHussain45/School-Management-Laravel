
 @include('header')
@include('nav')

<style>
.valid.false {
background: red;
}
.valid.true {
background: green;
}
.error {
color: red;
}
</style>

<div id="body-container" ng-app="student" ng-controller="stude" ng-cloak>
<div class="page-title clearfix">
<div class="pull-left">
<h1>Student</h1>
<small class="subtitle">Add Student
</small>
</div>
<div align="right">
  <?php echo date("Y/m/d");?>
</div>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Add Student
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<div>
<div class="row">
<div class="col-md-4">
<label>First Name</label><br>
<input type="text" class="form-control" ng-model="name" placeholder="Enter First Names">
</div>
<div class="col-md-4">
<label>Last Name</label><br>
<input type="text" class="form-control" ng-model="lname" placeholder="Enter Last Name">
</div>
<div class="col-md-4">
<label>Father</label><br>
<input type="text" class="form-control" ng-model="father" placeholder="Enter Father Name">
</div>

</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Contact</label><br>
<input type="number" class="form-control" ng-model="contact" placeholder="Enter Contact">
</div>
<div class="col-md-4">
<label>Address</label><br>
<input type="text" class="form-control" ng-model="qualification" placeholder="Enter your Address">
<input type="hidden" ng-model="token" value="{{ csrf_token() }}">
</div>
<div class="col-md-4">
<label>Age</label><br>
<input type="number" class="form-control" ng-model="age" placeholder="Enter Age">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Email</label><br>
<input type="text" class="form-control" ng-model="email" placeholder="Enter Email">
</div>
<div class="col-md-4">
<label>User Name</label><br>
<input type="text" class="form-control" ng-model="username" placeholder="Enter Salary">
</div>
<div class="col-md-4">
<label>Password</label><br>
<input type="password" class="form-control" ng-model="password" placeholder="Enter age">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" id="add">
                                                <option value="1">Student</option>
                                            </select>
                                        </div>
</div>

</div>
<br>


                    <div class="box">
                               <!--  <div class="box-header">
                                
                                </div> --><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Section</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr>
<td>
<div class="col-md-4">
   
                                        <label>Select Class</label>
                                           <select class="form-control" name="class_id" ng-model="classId" ng-options="item.id as item.name for item in class" ng-change="getSectionCLasses()">
                                            </select>
</div>

<td>

    <div class="col-md-4">
      <label>Select Section</label>
                                            <select class="form-control" name="section" ng-model="sectionId"
                                            ng-options="item.id as item.name for item in section"
                                            ng-change="getStudent()">

                                            </select>
    
</div></td>      
                                              
                                                
                                            </tr>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                            <div class="row">
<div class="col-lg-6">
<button type="submit" class="btn btn-primary btn-rounded" ng-click="insertdata()">Submit</button> 
</div>

</div>


</div>
</div>



<!-- <div class="form-group">

<label for="exampleInputEmail2">Email</label>
<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
</div> -->
</div>
</div>

</div>
</div>
</div>
</div>
 <!-- FORM END -->
<div id="footer-wrap" class="footer">
Copyright © 2017 Senior Developer Noman Hussain Usmani
<label class = "pull-right">Futher Detail</label>
<br>
<span class="pull-right" style="font-size:40px;">
<a href="https://www.facebook.com/noman.hussain.395"><i  class="fa fa-facebook-square"></i></a>
<a href="https://twitter.com/Nomanhussain45_"><i  class="fa fa-twitter"></i></a>
</span>
</div>
</div>
</div>
<script src="/js/vendor.js" type="text/javascript"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
<script src="/angular.min.js"></script>
<script src="/controllers/student.js"></script>



</body>
</html>
