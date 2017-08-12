<!DOCTYPE html>
<html>
<head>
<title> | Login </title>
<link rel="stylesheet" href="/css/vendor.css"/>
<link rel="stylesheet" href="/css/app-green.css"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content ">
<script src="/jQuery/jquery-2.2.3.min.js"></script>
<!-- <script src="/js/vendor.js" type="text/javascript"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script> -->
<script src="/js/app.js" type="text/javascript"></script>
<script type="text/javascript">
	
		setTimeout(function(){$('.mydiv').fadeOut(2000);},3000);
	</script>

<div class="back">
<div class="login-outer">
<div class="login-wrap">
<div class="login-left striped-bg text-center">
<a href="http://dashy.strapui.com/laravel" class="logo-lg">
<i class="fa fa-paper-plane"></i> School  Management 
</a>
<div class="slogan">System</div>
</div>



<div class="login-right striped-bg">
<div class="col-md-8">
<?php 
if(isset($error)):?>
  <div class="alert alert-danger mydiv">
  <strong>Danger!</strong> <?php echo $msg?>
  </div>

<?php endif?>
</div>
<div class="heading">Login to your Account</div>
<form action="/login" method="post">
<div>
<div class="login-input-group">
 											
                                            <select class="form-control" name="role" style="background:none">
                                            	<option>Select Role</option>
                                                <option value="1">Student</option>
                                                <option value="2">Teacher</option>
                                                <option value="3">Addministration</option>
                                            </select>
                                            <br>
<span class="login-input-group-addon"><i class="fa fa-at fa-fw"></i></span>
<input type="text" class="form-control" name="username" placeholder="User Name">

</div>
<div class="login-input-group">
<span class="login-input-group-addon"><i class="fa fa-key fa-fw"></i></span>
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="password" class="form-control" placeholder="password" name="password">
</div>
<button type="submit" class="btn btn-default btn-lg">Login</button>
</div>

</div>
</form>
</div>
</div>
</div>
</body>
</html>