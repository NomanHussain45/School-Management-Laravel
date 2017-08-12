@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Student</h1>
<small class="subtitle"> Student-List
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
<h3 class="panel-title" align="center">Student List
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
                  <th>Class</th>
                  <th>Section</th>
                  <th>Address</th>
                 <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
            
                  <?php foreach($stud as $s):?>
                <tr>
                  <td><?php echo $s->firstname?></td>
                  <td><?php echo $s->class_id?></td>
                   <td><?php echo $s->name?></td>
                  <td><?php echo $s->qualification?></td>
                  <td>
                  
                   
                    <a href="/student/delete/<?php echo $s->stuid?>">
                   <i class="fa fa-trash"></i>  
                   </a>                             
                  </td>
                  
                </tr>
              <?php endforeach?>
                  
                </tbody>
              </table>
            </div>
            <button class="btn btn-primary btn-rounded print">Generate Report</button>
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
<script type="text/JavaScript" src="/controllers/jQuery.print.js"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
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

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>




