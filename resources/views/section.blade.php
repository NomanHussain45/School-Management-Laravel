@include('header')
@include('nav')

<div id="body-container">
<div class="page-title clearfix">
<div class="pull-left">
<h1>Section</h1>
<small class="subtitle">Add Section
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
<h3 class="panel-title" align="center">Add Section
</h3>
</div>
<div>
<div class="panel-body">
<div class="form-group">
<div class="row">
<div class="col-md-4">
<label>Select Class</label><br>
<input type="hidden" id="token" value="{{ csrf_token() }}">
    <select class="form-control" id="class">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
</div>
<div class="col-md-4">
<label>Select Section</label><br>
    <select class="form-control" id="name">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
</div>
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

    var classes = new Object();
    classes.class_id = $('#class').val();
     classes.name = $('#name').val();
    classes._token =$('#token').val();
     var url = "/Section";
    $.ajax({
        url: url,
        data: classes,
        type: 'post',
   success: function(response){
    window.setTimeout(function(){window.location.reload();},1000)
   	
        
         }

  });
    });
</script>

</body>
</html>




