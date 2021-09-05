<?php
require '../../include/db_conn.php';
page_protect();

$aname=$_SESSION['user_data'];
$position=$_SESSION['auth_level'];

$query  = "select * from admin where username='$aname'";
							// echo $query;
							$result = mysqli_query($con, $query);
							$no    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    	$img=$row['admin_photo'];

							    	$no=1;
							    }
							}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - Admin</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="../assets/styles/style.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="../assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="../assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="../assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="../assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="../assets/plugin/chart/chartist/chartist.min.css">

	<script type="text/javascript" src="../../chartjs/Chart.min.js"></script>
	<script type="text/javascript" src="../../chartjs/jquery.min.js"></script>
	<script type="text/javascript" src="../../chartjs/script.js"></script>

	<!-- FullCalendar -->
	<link rel="stylesheet" href="../assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="../assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- Dark Themes -->
	<link rel="stylesheet" href="../assets/styles/style-dark.min.css">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">Admin</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?> "><span class="status online"></span></a>
			<h5 class="name"><a href="profile.php"><?php echo $aname ?></a></h5>
			<h5 class="position"><?php echo $position ?></h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
					<div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<?php include 'nav1.php' ;?>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<!-- /.ico-item fa fa-fa-arrows-alt -->
	
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<!-- /#notification-popup -->

<style>
							#chart-container {
    						width: 70%;
    						height: auto;
							}

							.column {
  							float: right;
  							width: 25%;
  							padding: 50px;
  							margin-left: 50px;
  							margin-right: 30px;

							}

							.row {margin: 0 -10px;}

							/* Clear floats after the columns */
							.row:after {
  							content: "";
  							display: table;
  							clear: both;
							}

							/* Responsive columns */
							@media screen and (max-width: 400px) {
  							.column {
    						width: 100%;
    						display: block;
    						margin-bottom: 10px;
  							}
							}
							.card {
  							box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  							padding: 45px;
  							width: 270px;
  							margin-left: 40px;
  							text-align: center;
  							background-color: #444;
  							color: white;
  							font-size: 20px;

							}

							.fa {
  							font-size:100px;
							}
						</style>
						<?php 
						$query2=mysqli_query($con,"select place_name,count_visit from places order by count_visit desc limit 1");

						$no    = 1;

                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
                                    $name=$row['place_name'];
                                    $count1=$row['count_visit'];

                                    $no++;
                                }
                            }
            ?>
						
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Most Visited Places</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						
						<!-- /.percent -->
						<div class="right-content">
							<h2 class="counter"><?php echo $count1 ?></h2>
							<!-- /.counter -->
							<p class=""><?php echo $name ?></p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
						<div class="clear"></div>
						<!-- /.clear -->
						<div class="process-bar">
							<div class="bar-bg bg-warning"></div>
							<div class="bar js__width bg-warning" data-width="70%"></div>
							<!-- /.bar js__width bg-success -->
						</div>
						<!-- /.process-bar -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<?php 
						$query2=mysqli_query($con,"select restaurant_name,res_visit from restaurant order by res_visit desc limit 1");

						$rno    = 1;

                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
                                    $name1=$row['restaurant_name'];
                                    $count2=$row['res_visit'];

                                    $rno++;
                                }
                            }
            ?>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Most Visited Restaurant</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						
						<!-- /.percent -->
						<div class="right-content">
							<h2 class="counter"><?php echo $count2 ?></h2>
							<!-- /.counter -->
							<p class=""><?php echo $name1 ?></p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
						<div class="clear"></div>
						<!-- /.clear -->
						<div class="process-bar">
							<div class="bar-bg bg-warning"></div>
							<div class="bar js__width bg-warning" data-width="70%"></div>
							<!-- /.bar js__width bg-success -->
						</div>
						<!-- /.process-bar -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<?php 
						$query2=mysqli_query($con,"select hotel_name,hotel_visit from hotel order by hotel_visit desc limit 1");

						$rno    = 1;

                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
                                    $name2=$row['hotel_name'];
                                    $count3=$row['hotel_visit'];

                                    $rno++;
                                }
                            }
            ?>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Most Visited Hotel</h4>
					<!-- /.box-title -->
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						
						<!-- /.percent -->
						<div class="right-content">
							<h2 class="counter"><?php echo $count3 ?></h2>
							<!-- /.counter -->
							<p class=""><?php echo $name2 ?></p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
						<div class="clear"></div>
						<!-- /.clear -->
						<div class="process-bar">
							<div class="bar-bg bg-warning"></div>
							<div class="bar js__width bg-warning" data-width="70%"></div>
							<!-- /.bar js__width bg-success -->
						</div>
						<!-- /.process-bar -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<div class=" col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Top View Places</h4>
					<!-- /.box-title -->
						

						<div id="chart-container" style="float:left;">
        					<canvas id="graphCanvas2">
    					</div>
    							<script>
        						$(document).ready(function () {
            					showGraph1();
       							 });


        						function showGraph1()
       							 {
           						 {
                					$.post("data.php",
                					function (data)
                				{
                    				console.log(data);
                    				var place_name = [];
                    				var count_visit = [];
                    				var Color = [];

                    				var dynamicColors = function() {
                      				var r = Math.floor(Math.random() * 255);
                      				var g = Math.floor(Math.random() * 255);
                      				var b = Math.floor(Math.random() * 255);
                      				return "rgb(" + r + "," + g + "," + b + ")";
                    			};

                    				for (var i in data) {
                        			place_name.push(data[i].place_name);
                        			count_visit.push(data[i].count_visit);
                        			Color.push(dynamicColors());
                    			}

                    				var chartdata = {
                        				labels: place_name,
                        				datasets: [{

                                		label: "Top Visit",
                                		backgroundColor: Color,
                                		borderColor: '#46d5f1',
                                		hoverBackgroundColor: '#CCCCCC',
                                		hoverBorderColor: '#666666',
                                		data: count_visit
                                
                            	}]
                    			};  

                    				var graphTarget1 = $("#graphCanvas2");

                   					var barGraph = new Chart(graphTarget1, {
                        			min: 0,
                      
                        			type: 'bar',
                        				data: chartdata,
                        					options: {
                          						scales: {
                           							 yAxes: [{
                             							 ticks: {
                                						beginAtZero: true,
                                							stepSize: 10
                              									}
                            								}]
                          								}
                      								}
                        
                    							});
                				});
           						 }
        						 }
        						</script>
        						</canvas>
				</div>
				<!-- /.box-content -->
			</div>


			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Top Average</h4>


					<div id="chart-container" style="float:right;">
        				<canvas id="graphCanvas1">
    				</div>

    
    					<script>
        					$(document).ready(function () {
            					showGraph();
        					});


        					function showGraph()
        					{
            				{
               				 $.post("data1.php",
                			 function (data1)
                			{
                    		console.log(data1);
                    		var average = [];
                    		var place = [];
                    		var Color = [];

                    		var dynamicColors = function() {
                      			var r = Math.floor(Math.random() * 255);
                      			var g = Math.floor(Math.random() * 255);
                      			var b = Math.floor(Math.random() * 255);
                      			return "rgb(" + r + "," + g + "," + b + ")";
                    		};

                    		for (var i in data1) {
                        		place.push(data1[i].place);
                        		average.push(data1[i].average);
                        		Color.push(dynamicColors());
                    		}

                    		var chartdata1 = {
                        		labels: place,
                        		datasets: [{

                                label: "Top Visit",
                                backgroundColor: Color,
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: average
                                
                            	}]
                    		};  

                   			var graphTarget = $("#graphCanvas1");

                    		var barGraph = new Chart(graphTarget, {
                        		min: 0,
                      
                       			 type: 'bar',
                       				 data: chartdata1,
                        				options: {
                          					scales: {
                            					yAxes: [{
                              						ticks: {
                                					beginAtZero: true,
                                						stepSize: 10
                              								}
                            							}]
                          							}
                    						   }
                        
                    		});
                			});
            				}
        					}
        				</script>
        			</canvas>
				</div>
			</div>
		</div>	
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Percent Circle -->
	<script src="assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="assets/scripts/chart.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>