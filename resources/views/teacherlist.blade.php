@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Teacher</h1>
<small class="subtitle">Teacher List
</small>
</div>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Teacher List
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
                  <th>Teacher Name</th>
                  <th>Qualification</th>
                  <th>Email</th>
                  <th>Salary</th>
                  <th>subjects</th>
                  <th>Classes</th>
      
                 
                 <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
            
                  <?php foreach($teach as $t):?>
                <tr>
                  <td><?php echo $t->firstname?></td>
                   <td><?php echo $t->qualification?></td>
                  <td><?php echo $t->email?></td>
                   <td><?php echo $t->salary?></td>
                  <td><?php echo $t->name?></td>
                   <td><?php echo $t->class?></td>
                
                 
                  <td>
               
                   
                    <a href="/teacher/delete/<?php echo $t->id?>">
                   <i class="fa fa-trash"></i>  
                   </a>               
                   </a>                             
                  </td>
                  
                </tr>
              <?php endforeach?>
                  
                </tbody>
              </table>
            </div>
           <button class="btn btn-primary btn-rounded printThis">Generate Report</button>
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
<script src="/js/app.js" type="text/javascript"></script>

<script src="/js/vendor.js" type="text/javascript"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>

<script type="text/JavaScript" src="/controllers/jQuery.print.js"></script>
<script type="text/javascript">
  $('.printThis').on('click',function(){
  
    $('html').print({
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
          title: 'Teacher-list',
          doctype: '<!doctype html>'
  });
  });


</script>




</body>

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>



 

