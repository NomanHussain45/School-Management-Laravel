@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Principal</h1>
<small class="subtitle">Add Principal
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
<h3 class="panel-title" align="center">Add Principal
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<div class="row">
<div class="col-md-4">
<label>First Name</label><br>
<input type="text" class="form-control" id="name" placeholder="Enter First Names">
</div>
<div class="col-md-4">
<label>Last Name</label><br>
<input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
</div>
<div class="col-md-4">
<label>CNIC</label><br>
<input type="number" class="form-control" id="cnic" placeholder="Enter cnic">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Contact</label><br>
<input type="number" class="form-control" id="contact" placeholder="Enter Contact">
</div>
<div class="col-md-4">
<label>Qualification</label><br>
<input type="text" class="form-control" id="qualification" placeholder="Enter your Qualificaiton">
<input type="hidden" id="token" value="{{ csrf_token() }}">
</div>
<div class="col-md-4">
<label>Email</label><br>
<input type="text" class="form-control" id="email" placeholder="Enter Email">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<label>Salary</label><br>
<input type="number" class="form-control" id="salary" placeholder="Enter Salary">
</div>
<div class="col-md-4">
<label>Age</label><br>
<input type="number" class="form-control" id="age" placeholder="Enter age">
</div>
<!-- <div class="col-md-4">
<label>Image</label><br>
<input type="file" class="form-control" id="image" placeholder="">
</div>
 -->
</div>
<br>

<div class="row">
<div class="col-lg-6">
<button type="submit" class="btn btn-primary btn-rounded submit">Submit</button> 
</div>
</div>
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
<script type="text/javascript">
  $('.submit').on('click',function(){

    var principal = new Object();
   principal.firstname = $('#name').val();
   principal.lastname = $('#lname').val();
   principal.cnic = $('#cnic').val();
   principal.contact = $('#contact').val();
   principal.qualification = $('#qualification').val();
   principal.email = $('#email').val();
   principal.salary = $('#salary').val();
   principal.age = $('#age').val();
   principal._token =$('#token').val();
   
     var url = "/Add-Principal";
    $.ajax({
        url: url,
        data: principal,
        type: 'post',
   success: function(response){
    window.setTimeout(function(){window.location.reload();},1000)
    $('#name').val("");
     $('#lname').val("");
      $('#cnic').val("");
       $('#contact').val("");
        $('#qualification').val("");
         $('#email').val("");
          $('#salary').val("");
           $('#age').val("");
         }
        




  });
    });
</script>

</body>
</html>


