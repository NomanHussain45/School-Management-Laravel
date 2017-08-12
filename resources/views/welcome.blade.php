@include('header')
@include('nav')
<div id="body-container">
 
<div class="conter-wrapper">
<div class="container-fluid home-page">
<div class="row">
<div class="col-md-6 calendar-col">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Welcome Sanket!</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-4 calendar-wrapper">
<div class="today">
<h2 class="date"></h2> <span class="month"></span>
</div>
</div>
<div class="col-md-8 calendar-widget">
<div id="calendar2"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 graph-col">
<div class="panel panel-default line-chart">
<div class="panel-body">
<div class="line-chart-container">
<canvas id="home-line-chart"></canvas>
</div>
</div>
</div>
</div>
</div>
<div>
<div class="alert alert-white">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<strong>Attention: </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius lacus vitae purus tincidunt blandit. Phasellus malesuada accumsan felis venenatis mollis. Suspendisse at pharetra enim, in congue mauris. Nam sodales turpis lorem, ac semper augue congue sed. Nam id ullamcorper elit, at sodales justo. Aliquam suscipit mi nec ex tempus laoreet. Donec tincidunt risus eu rutrum sagittis. <a href="/chart/c3charts.html"></a>
</div>
</div>
<div>
<div class="row">
<div class="col-md-4">
<div class="stat panel striped-bg">
<div class="row">
<div class="col-md-3 bg-info icon-col striped-bg">
<i class="fa fa-eye fa-4x"></i>
</div>
<div class="col-md-9 text-col">
<i class="fa fa-eye fa-5x"></i>
<h2>71,842</h2>
<p>Profile Views</p>
</div>
</div>
</div> </div>
<div class="col-md-4">
<div class="stat panel striped-bg">
<div class="row">
<div class="col-md-3 bg-warning icon-col striped-bg">
<i class="fa fa-bar-chart fa-4x"></i>
</div>
<div class="col-md-9 text-col">
<i class="fa fa-bar-chart fa-5x"></i>
<h2>6,123</h2>
<p>Total Sales this week</p>
</div>
</div>
</div> </div>
<div class="col-md-4">
<div class="stat panel striped-bg">
<div class="row">
<div class="col-md-3 bg-danger icon-col striped-bg">
<i class="fa fa-calculator fa-4x"></i>
</div>
<div class="col-md-9 text-col">
<i class="fa fa-calculator fa-5x"></i>
<h2>$12,34.00</h2>
<p>Net Revenue</p>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>
<div id="footer-wrap" class="footer">
Copyright © 2014 Dashy Theme
<span class="pull-right">
<a href="/javascript:;"><i class="fa fa-facebook-square"></i></a>
<a href="/javascript:;">&nbsp;<i class="fa fa-twitter-square"></i></a>
</span>
</div>
</div>
</div>
<script src="/js/vendor.js" type="text/javascript"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
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
<script>

        $(function(){


            // Activate Calendar

            $('#calendar2').fullCalendar({
            });




            // Line chart
            var lineChartData1 = {
                labels : ["","","","","","","","","","","",""],
                datasets : [
                    {
                        label: "My First dataset",
                        fillColor : "rgba(6, 197, 172, 0.5)",
                        strokeColor : "rgba(6, 197, 172, 1)",
                        pointColor : "rgba(6, 197, 172, 1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(6, 197, 172, 1)",
                        data : [65,59,80,81,56,55,40,74,36,65,33,55]
                    },
                    {
                        label: "My Second dataset",
                        fillColor : "rgba(244, 204, 11, 0.5)",
                        strokeColor : "rgba(244, 204, 11, 1)",
                        pointColor : "rgba(244, 204, 11, 1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(244, 204, 11, 1)",
                        data : [28,48,40,29,86,27,60,45,27,59,68,38]
                    }
                ]

            };

        
            var homeLineChart = document.getElementById("home-line-chart").getContext("2d");

            var chartCurves = new Chart(homeLineChart).Line(lineChartData1, {
                responsive: true,
                scaleShowLabels:false,
                scaleShowGridLines : false,
                scaleShowHorizontalLines: false,
                scaleShowVerticalLines: false,
                pointDot: false
            });

            // Set the date
            $('.today .date').text((new Date).getDate());
            
            var months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ];

            $('.today .month').text(months[(new Date).getMonth()]);

        });

    </script>
</body>

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>