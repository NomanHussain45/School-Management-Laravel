
 @include('header')
@include('nav')

<div id="body-container" ng-app="student" ng-controller="stude" ng-cloak>
<div class="page-title clearfix">
<div class="pull-left">
<h1>Profile</h1>
<small class="subtitle">
</small>
</div>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Details
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<div class="row">
<div class="col-md-4">
<label>First Name</label><br><br>

<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->firstname?></span></label>
</div>
<div class="col-md-4">
<label>Last Name</label><br><br>
<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->lastname?></span></label>
</div>
<div class="col-md-4">
<label>Father</label><br><br>
<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->father?></span></label>
</div>

</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Contact</label><br><br>
<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->contact?></span></label>
</div>
<div class="col-md-4">
<label>Qualification</label><br><br>
<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->qualification?></span></label>
</div>
<!-- <div class="col-md-4">
<label>Address</label><br>
<input type="textarea" class="form-control"  placeholder="Enter your Address">

</div>
<div class="col-md-4">
<label>Age</label><br>
<input type="number" class="form-control"  placeholder="Enter Age">
</div>
</div> -->
<div class="row">
<div class="col-md-4">
<label>Email</label><br><br>
<label><span style="color:#9CB679;font-weight:bold"><?php echo $data->email?></span></label>
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

