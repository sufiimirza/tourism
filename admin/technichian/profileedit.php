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

	<title>Form elements - Ninja Admin Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="../assets/styles/style.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="../assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="../assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="../assets/plugin/sweet-alert/sweetalert.css">
	
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
					<div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
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
		<h1 class="page-title">Profile</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<a href="#" class="ico-item fa fa-power-off js__logout"></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">

			<!-- /.col-lg-6 col-xs-12 -->

			
			<!-- /.col-lg-6 col-xs-12 -->

			<div class="col-xs-12">
				
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			<div class=" col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Profile</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<?php
						$id=$_GET['admin_id'];
						$sql="select * from admin where admin_id='$id'";
						$res=mysqli_query($con, $sql);
		
					 		if($res){
						      			$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
						      			$a=$row['username'];
						      			$b=$row['admin_email'];
						      			$c=$row['dob'];
						      			$e=$row['admin_photo'];
				
						      		}
						
						?>
						<form class="form-horizontal" action="profileupdate.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
               					<label for="city_id" class="col-sm-3 control-label">Admin ID</label>

								<div class="col-sm-9">       				
            					<input type="text" class="form-control" name="admin_id" id="admin_id" readonly value="<?php echo $id; ?>">
             					</div>
             				</div>
							
							<div class="form-group">
								<label for="postcode" class="col-sm-3 control-label">User Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="username"  value="<?php echo $a?>">
								</div>
							</div>
							<div class="form-group">
								<label for="state_name" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="admin_email" value="<?php echo $b?>">
								</div>
							</div>
							<div class="form-group">
								<label for="details" class="col-sm-3 control-label">Date of birth</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="dob" readonly value="<?php echo $c ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="res_photo" class="col-sm-3 control-label">Photo</label>
								<div class="col-sm-9">
									<input type="file" class="form-control" name="admin_photo">
								</div>
								<td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($e); ?> " controls width='100px' height='100px'> </td>
							</div>
								<div class="col-sm-8">
									<button type="update" name="update" class="btn btn-info btn-sm waves-effect waves-light">EDIT PROFILE</button>
								</div>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->
		<div class="row">

			<!-- /.col-lg-4 ol-xs-12 -->

			<!-- /.col-lg-4 col-xs-12 -->

			<!-- /.col-lg-4 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->		
<!-- 	</div> -->
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
	<script src="../assets/scripts/jquery.min.js"></script>
	<script src="../assets/scripts/modernizr.min.js"></script>
	<script src="../assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../assets/plugin/nprogress/nprogress.js"></script>
	<script src="../assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="../assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="../assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<script src="../assets/scripts/main.min.js"></script>
</body>
</html>