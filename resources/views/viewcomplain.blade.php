@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Complain</h1>
<small class="subtitle">add complain
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
<h3 class="panel-title" align="center">Complain Box
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<form action="/Add-Complain" method="post">
<div class="row">
<div class="col-md-12">
<?php foreach($data as $d):?>

<center>
<label>Complain</label><br>

<textarea rows="5" cols="60" >

<?php echo $d->addcomp?>
</textarea>

</div>


</center>
<?php endforeach?>

</div>
<br>
</div>
</form>
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
</body>
</html>




