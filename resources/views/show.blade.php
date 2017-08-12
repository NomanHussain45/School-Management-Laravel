
@include('header')

</nav>
<!--  -->


<div id="body-container">
<div class="page-title clearfix">
<center>
<div class="pull-left">

<h1>Personal Detail</h1>
<small class="subtitle">Details
</small>

</div>
<div align="right">
  <?php echo date("Y/m/d");?>
</div>
</center>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">
<label style="color:#000000;">
<?php echo $list[0]->firstname?>
</label>
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<div class="row">
<div class="col-md-4">
<label>Last Name</label><br>
<?php echo $list[0]->lastname?>
</div>
<div class="col-md-4">
<label>CNIC</label><br>
<?php echo $list[0]->cnic?>
</div>
<div class="col-md-4">
<label>Email</label><br>
 <?php echo $list[0]->email?>

</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Contact</label><br>
 <?php echo $list[0]->contact?>

</div>
<div class="col-md-4">
<label>Qualification</label><br>
<?php echo $list[0]->qualification?>

</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Salary</label><br>
  <?php echo $list[0]->salary?>

</div>
<div class="col-md-4">
<label>Age</label><br>
   <?php echo $list[0]->age?>

</div>

</div>
<br>
<button class="btn btn-primary btn-rounded print">Generate Report</button>

</div>
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
<script type="text/JavaScript" src="/controllers/jQuery.print.js"></script>
<script type="text/javascript">
  $('.print').on('click',function(){
    $("html").print({
          globalStyles: true,
          mediaPrint: true,
          stylesheet: true,
          noPrintSelector: ".no-print",
          iframe: false,
          append: null,
          prepend: null,
          manuallyCopyFormValues: true,
          deferred: $.Deferred(),
          timeout: 750,
          title: 'Attendance-List',
          doctype: '<!doctype html>'
  });
  });
</script>

</body>
</html>
  



