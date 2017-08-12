 @include('header')
@include('nav')
<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Teacher</h1>
<small class="subtitle">Add Teacher
</small>
</div>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Add Teacher
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
<div class="col-md-4">
<label>Address</label><br>
<input type="text" class="form-control" id="image" placeholder="">
</div>

</div>
<br>
<div class="row">
<div class="col-md-4">
<label>User Name</label><br>
<input type="text" class="form-control" id="username" placeholder="Enter Salary">
</div>
<div class="col-md-4">
<label>Password</label><br>
<input type="password" class="form-control" id="password" placeholder="Enter age">
</div>
<div class="col-md-4">
<div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" id="add">
                                                
                                                <option value="2">Teacher</option>

                                            </select>
                                        </div>
</div>

</div>
<br>
<!-- <div class="row">
<div class="col-sm-12">

</div>
</div> -->

                    <div class="box">
                               <!--  <div class="box-header">
                                
                                </div> --><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                 <th></th>
                                                 <th></th>
                                              
                                                <th></th>
                                                <th>Subject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr>
<td>
<input type="checkbox"   value="1 (A)" class="name">1(A)<br>
  <input type="checkbox" value="2 (A)" class="name">2(A)<br>
  <input type="checkbox" value="3 (A)" class="name">3(A)<br>
  <input type="checkbox" value="4 (A)" class="name">4(A)<br>
  <input type="checkbox" value="5 (A)" class="name">5(A)<br>
 <td>
  <input type="checkbox" value="6 (A)" class="name">6(A)<br>
  <input type="checkbox" value="7 (A)" class="name" >7(A)<br>
  <input type="checkbox" value="8 (A)" class="name" >8(A)<br>
  <input type="checkbox" value="9 (A)" class="name" >9(A)<br>
  <input type="checkbox" value="10 (A)" class="name" >10(A)<br>
  </td>
</td>
 
<!-- <td>

    <div class="col-md-4">
    <select class="btn btn-primary dropdown-toggle" id ="section" type="submit" data-toggle="dropdown">
  <option value="A">A</option>
  <option value="B">B</option>
</select>
</div></td> -->  
<td>
<input type="checkbox"   value="1 (B)" class="name">1(B)<br>
  <input type="checkbox" value="2 (B)" class="name">2(B)<br>
  <input type="checkbox" value="3 (B)" class="name">3(B)<br>
  <input type="checkbox" value="4 (B)" class="name">4(B)<br>
  <input type="checkbox" value="5 (B)" class="name">5(B)<br>
  </td>
  <td>
  <input type="checkbox" value="6 (B)" class="name">6(B)<br>
  <input type="checkbox" value="7 (B)" class="name" >7(B)<br>
  <input type="checkbox" value="8 (B)" class="name" >8(B)<br>
  <input type="checkbox" value="9 (B)" class="name" >9(B)<br>
  <input type="checkbox" value="10 (B)" class="name">10(B)<br>
</td>  

   <!--  <button class="btn btn-primary dropdown-toggle" type="submit" data-toggle="dropdown">Select Section
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     <option>A</option>
    </ul> -->

 
  
                                                <td><div>
<input type="checkbox"   class="subject" value="Math"> Maths<br>
  <input type="checkbox" class="subject" value="Urdu">Urdu<br>
  <input type="checkbox" class="subject" value="English">English<br>
  <input type="checkbox" class="subject" value="Computer">Computer<br>
  <input type="checkbox" class="subject" value="Sindhi">Sindhi<br>
</div></td>
                                                
                                            </tr>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                            <div class="row">
<div class="col-lg-6">
<button type="submit" class="btn btn-primary btn-rounded submit">Submit</button> 
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
<script type="text/javascript">
  $('.submit').on('click',function(){

    var teacher = new Object();
    teacher.firstname = $('#name').val();
    teacher.lastname = $('#lname').val();
    teacher.cnic = $('#cnic').val();
    teacher.contact = $('#contact').val();
    teacher.qualification = $('#qualification').val();
    teacher.email = $('#email').val();
    teacher.salary = $('#salary').val();
     teacher.class  = $('.name').map(function(){
      if($(this).is(":checked"))
      {
        return $(this).val();
      }

     }).get();
      teacher.name  = $('.subject').map(function(){
      if($(this).is(":checked"))
      {
        return $(this).val();
      }

     }).get();
    teacher.age = $('#age').val();
    teacher.username = $('#username').val();
    teacher.password = $('#password').val();
     teacher.role = $('#add').val();
    teacher._token =$('#token').val();
     var url = "/Add-Teacher";
    $.ajax({
        url: url,
        data: teacher,
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

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>

