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

	<title>Article Add - Admin</title>

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
		<h1 class="page-title">Article</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<!-- /.ico-item fa fa-fa-arrows-alt -->
		<div class="ico-item toggle-hover js__drop_down ">
			<span class="fa fa-th js__drop_down_button"></span>
			<div class="toggle-content">
				<ul>
					<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
					<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
					<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
					<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
					<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
				</ul>
				<a href="#" class="read-more">More</a>
			</div>
			<!-- /.toggle-content -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<a href="#" class="ico-item fa fa-power-off js__logout"></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->

	<!-- /.content -->
</div>
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
					<h4 class="box-title">Add Article</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal" action="articlesubmit.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="city_id" value="<?php echo $id; ?>">
							<div class="form-group">
               				<label for="article_id" class="col-sm-3 control-label">Article ID</label>
							<div class="col-sm-9">      				
							<?php
              				function getRandomWord($len = 6)
              				{
                  			$word = array_merge(range('A', 'Z'));
                  			shuffle($word);
                  			return substr(implode($word), 0, $len);
              				}

            				?>
            				<input type="text" class="form-control" name="article_id" id="article_id" readonly value="<?php echo getRandomWord(); ?>">

             				</div>
             			</div>
<!--              			<div class="form-group">
             				<label for="admin_id" class="col-sm-3 control-label">Author</label>
             				<div class="col-sm-9">
             					 <tr>
               					 <td height="35"><select name="admin" id="boxx" required onchange="myplandetail(this.value)">
								 <option class="col-sm-9" value="">-- Please select --</option>
								 <?php

							     $query = "select * from admin";
							    
							     //echo $query;
							     $result = mysqli_query($con, $query);
							    
							     if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							            echo "<option value=" . $row['admin_id'] . ">" . $row['username'] . "</option>";
							            
							        }
							    }
							    
							?>
								</select></td></td>
             					</tr>
         
             				</div>
             			</div> -->
							<div class="form-group">
								<label for="article_name" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">						
									<input type="text" name="article_name"  class="form-control"  placeholder="Title">
								</div>
							</div>
								<div class="form-group">
             				<label for="city_id" class="col-sm-3 control-label">State</label>
             				<div class="col-sm-9">
             					 <tr>
               					 <td height="35"><select  class="form-control select2_1" name="state" id="boxx" required>
								 <option class="col-sm-9" value="">-- Please select --</option>
								 <?php

							     $query = "select * from state";
							    
							     //echo $query;
							     $result = mysqli_query($con, $query);
							    
							     if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							            echo "<option value=" . $row['state_ID'] . ">" . $row['state_name'] . "</option>";
							            
							        }
							    }
							    
							?>
						</select></td></td>
             </tr>
         </div></div>
							<!-- <div class="form-group">
								<label for="postcode" class="col-sm-3 control-label">Release Date</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="postcode" id="postcode" placeholder="City Name">
								</div>
							</div> -->
							<div class="form-group">
								<label for="state_name" class="col-sm-3 control-label">Article Content</label>
								<div class="col-sm-9">
									<textarea id="textarea" class="form-control" name="articlec"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="state_name" class="col-sm-3 control-label">Article Image</label>
								<div class="col-sm-9">
									<input type="file" class="form-control" name="article">
								</div>
							</div>
							
							<div class="col-sm-8">
									<button type="submit" class="btn btn-info btn-sm waves-effect waves-light">ADD ARTICLE</button>
								</div>
							<!-- <div class="form-group">
								<label for="city_photo" class="col-sm-3 control-label">Photo</label>
								<div class="col-sm-9">
									<input type="file" class="form-control" name="city_photo" id="city_photo" placeholder="Name of State">
								</div>
							</div> -->
						</form>
					</div>
					
					</div><!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>

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