@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Principle</h1>
<small class="subtitle">Principle-List
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
<h3 class="panel-title" align="center">Principle Detail
</h3>
</div>
<div class="conter-wrapper">
<script src="/jQuery/jquery-2.2.3.min.js"></script>
<section class="content">
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
               
             
                <tr>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Cnic</th>
                   <th>Qualification</th>
                 <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
            
                  <?php foreach($prin as $p):?>
                <tr>
                  <td><?php echo $p->firstname?></td>
                  <td><?php echo $p->contact?></td>
                  <td><?php echo $p->cnic?></td>
                   <td><?php echo $p->qualification?></td>
                  <td>
                  <a  data-target="#mymodal" data-toggle="modal">
                   <i class="fa fa-refresh edit" data-id= "<?php echo $p->id?>"></i>  
                   </a> 
                    
                   
                    <a href="/principle/delete/<?php echo $p->id?>">
                   <i class="fa fa-trash"></i>  
                   </a>                             
                  </td>
                  
                </tr>
              <?php endforeach?>
                  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
              <button class="btn btn-primary btn-rounded print">Generate Report</button>
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
<script type="text/JavaScript" src="/controllers/jQuery.print.js"></script>
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="box-header with-border">
            <center>
              <h3 class="box-title">Update Principle</h3>
              </center>
            
       
        </div>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
       
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <br>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Name</label>

                 
                    <input type="text" class="col-sm-8 " id="firstname" placeholder="Enter name">
                  
                </div>
                
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Contact No</label>

                 
                    <input type="text" class="col-sm-8 " id="contact_no" placeholder="Enter contact no">
                    

                  
                </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Qualification</label>

                 
                    <input type="text" class="col-sm-8 " id="qualification" placeholder="Enter Qualification">
                  

                  
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">CNIC</label>

                 
                    <input type="text" class="col-sm-8 " id="cnic" placeholder="Enter Qualification">
                      <input type="hidden" id="token" value ="{{ csrf_token() }}">
                          
                    

                  
                </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Email</label>

                 
                    <input type="text" class="col-sm-8 " id="email" placeholder="Enter Email">
                    <input id ="idModal" type = "hidden">

                  
                </div>
              
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
        
          <!-- /.box -->
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type = "submit"  class="btn btn-primary upsubmit" >Update user</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  var id;
$('.edit').on('click',function(){

  var div = $(this);
    id = $(this).data("id");
        var url = '/update/principle'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
            var data = $.parseJSON(response);
            $('#firstname').val(data[0].firstname);
            $('#contact_no').val(data[0].contact);
            $('#qualification').val(data[0].qualification);
             $('#cnic').val(data[0].cnic);
              $('#email').val(data[0].email);
             $('#d_id').val(data[0].id);
        
         }
            });
});


$('.upsubmit').on('click',function(){
  var post = new Object();


  post.firstname = $('#firstname').val();
  post.email = $('#email').val();
  post.contact = $('#contact_no').val();
  post.qualification = $('#qualification').val();
  post.cnic = $('#cnic').val();
  
  post._token = $('#token').val(); 

  var url = '/Principle-Updated'+'/'+id;
  $.ajax({

    url : url,
    data : post,
    type : 'post',

    success: function(response){

      setTimeout(function(){
          location.reload();
      },1000)

      



    }




  });
});


</script>

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




 


