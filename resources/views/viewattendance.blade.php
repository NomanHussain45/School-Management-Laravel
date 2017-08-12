@include('header')
@include('nav')
<!-- <link href="/css/ngPrint.css"> -->
<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Attendance</h1>
<small class="subtitle">List
</small>
</div>
<div align="right">
  <?php echo date("Y/m/d");?>
</div>
</div>
 <!-- FORM START -->
 <div class="conter-wrapper" >
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Attendance List
</h3>
</div>
<br>
 

<div class="conter-wrapper">
<section class="content">
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
               
             
                <tr>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Section</th>
                   <th>Attendance</th>
                     
           
                </tr>
                </thead>
                <tbody>
            
              <?php foreach($att as $a):?>
                <tr>
                  <td><?php echo $a->student?></td>
                    <td><?php echo $a->class_id?></td>
                      <td><?php echo $a->name?></td>
                        <td><?php echo $a->present?></td>
                 
                
                </tr> 
              <?php endforeach?>
                </tbody>
              </table>
           
            </div>
            
            <!-- /.box-body -->
      </div>
     <!--  <button class="btn btn-primary btn-rounded print">Generate Report</button> -->
      
  </section>
  </div>


</div>
</div>
</div>
</div>
<script src="/js/vendor.js" type="text/javascript"></script>


<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
<div id="footer-wrap" class="footer">
Copyright © 2017 Senior Developer Noman Hussain Usmani
<label class = "pull-right">Futher Detail</label>
<br>
<span class="pull-right" style="font-size:40px;">
<a href="https://www.facebook.com/noman.hussain.395"><i  class="fa fa-facebook-square"></i></a>
<a href="https://twitter.com/Nomanhussain45_"><i  class="fa fa-twitter"></i></a>
</span>
</div>

<!-- <script type="text/javascript">
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
</script> -->

</div>
</div>






</body>

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>




