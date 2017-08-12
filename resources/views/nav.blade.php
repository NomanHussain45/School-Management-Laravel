
</nav>
<div class="striped-bg" id="sidenav">
<div role="tabpanel" id="navTabs">
<div class="sidebar-controllers">
<div class="">
<div class="tab-content-scroller tab-content sidebar-section-wrap">
<div role="tabpanel" class="tab-pane active" id="menu">
<div class="photo-container text-center">
<a>
<img src="img/nomi.png" alt="" class="img-circle dash-profile"/>
</a>
<div class="t-p">
<a><span style="color:#9CB679;font-weight:bold"><?=session('login');?></span></a>
</div>
</div>
<div class="section-heading">Menus</div>
<?php if(session('role') == "3"):?>
	@include('adminnav')
<?php elseif(session('role') == "1"):?>
@include('studentnav')
<?php elseif(session('role') == "2"):?>
@include('teachernav')
<?php endif ?>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/vendor.js" type="text/javascript"></script>
<script src="vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script type="text/javascript">

	$(function(){

		// Sidebar Charts

		// Pie Chart
		var chart3 = c3.generate({
		   bindto: '#sidebar-piechart',
		    data: {
		         
		        // iris data from R
		        columns: [
		            ['1', 36],
		            ['2', 54],
		            ['3', 12],
		        ],
		        type : 'pie',
		        onclick: function (d, i) { console.log("onclick", d, i); },
		        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    },
		    pie: {
		      expand: true
		    },
		    size: {
		      width: 140,
		      height: 140
		    },
		    tooltip: {
		      show: false
		    }

		});



		// Bar Chart
		var chart6 = c3.generate({
		    bindto: '#sidebar-barchart',
		    data: {
		        columns: [
		            ['data1', 30, 200, 100, 400, 250, 310, 90, 125, 50]
		        ],
		        type: 'bar'
		    },
		    bar: {
		        width: {
		            ratio: 0.8
		        }
		    },
		    size: {
		      width: 200,
		      height: 120
		    },
		    tooltip: {
		      show: false
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    },
		    axis: {
		      y: {
		        show: false,
		        color: '#ffffff'
		      }
		}
		});


		// Sidebar Tabs
		$('#navTabs .sidebar-top-nav a').click(function (e) {
		 	e.preventDefault()
		 	$(this).tab('show');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 10);

		});



		$('.subnav-toggle').click(function() {
			$(this).parent('.sidenav-dropdown').toggleClass('show-subnav');
			$(this).find('.fa-angle-down').toggleClass('fa-flip-vertical');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 500);

		});

	    $('.sidenav-toggle').click(function() {
	        $('#app-container').toggleClass('push-right');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 500);

	    });


	    // Boxed Layout Toggle
		$('#boxed-layout').click(function() {
			
	        $('body').toggleClass('box-section');

	        var hasClass = $('body').hasClass('box-section');

	        $.get('/api/change-layout?layout='+ (hasClass ? 'boxed': 'fluid'));

		});



		$('.tab-content-scroller').perfectScrollbar();

		$('.theme-picker').click(function() {
			changeTheme($(this).attr('data-theme'));
		});


	});

	function changeTheme(theme) {

		$('<link>')
		  .appendTo('head')
		  .attr({type : 'text/css', rel : 'stylesheet'})
		  .attr('href', '/css/app-'+theme+'.css');

		$.get('api/change-theme?theme='+theme);

	}
</script>

</body>

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>

<!-- <li><a href="/Admin"><i class="fa fa-bookmark-o"></i>Administration</a></li>
<li><a href="/Principal"><i class="fa fa-bookmark-o"></i>Principal</a></li>
<li><a href="/Teacher"><i class="fa fa-bookmark-o"></i>Teacher</a></li>
<li><a href="/Student"><i class="fa fa-bookmark-o"></i>Student</a></li>
<li><a href="/Staff"><i class="fa fa-bookmark-o"></i>Staff</a></li>
<li><a href="/Class"><i class="fa fa-bookmark-o"></i>Class</a></li>
<li><a href="/Section"><i class="fa fa-bookmark-o"></i>Section</a></li>
<li><a href="/Subject"><i class="fa fa-bookmark-o"></i>Subject</a></li>
 -->