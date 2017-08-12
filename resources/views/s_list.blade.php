@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Staff</h1>
<small class="subtitle">Staff List
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
<h3 class="panel-title" align="center">Staff List
</h3>
</div>
<div class="conter-wrapper">
<section class="content">
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
               
             
                <tr>
                  <th>Name</th>
                <!--   <th>Cnic</th>
                  <th>Contact</th>
                  <th>Qualification</th>
                   <th>Email</th> -->
                 <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
              
                <?php foreach($sta as $s):?>
                  
                <tr>
               
                  
                   <td><a href="/show/<?php echo $s->id?>"><?php echo $s->firstname?></a>
                   </td>
                  
                
              
                  <td>
                   
                    <a href="/staff/delete/<?php echo $s->id?>">
                   <i class="fa fa-trash"></i>  
                   </a>                             
                  </td>
                  
                </tr>
              <?php endforeach?>
                  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
  </section>
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

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>




