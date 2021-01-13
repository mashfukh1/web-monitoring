<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>EMTECH-SGH</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/logo_xvT_icon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <script src="jquery.min.js"></script>
  <script src="Chart.bundle.js"></script>
</head>
<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='1'");
$row  = mysqli_fetch_array($data);
?>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">EMTECH-SGH</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
       <li>
        <a href="index2.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Control Room</span>
        </a>
      </li>
       <li>
        <a href="index.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Gallery</span>
        </a>
      </li>
       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item language">
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
		  <h5 class="logo-text">Muhammad Mashfukh</h5>
        <span class="user-profile"><img src="aku.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
           </div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</header>

<!--End topbar header-->
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
   <center><h2><b>CONTROL ROOM</b></h2></center>
	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>PH UP</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>PH DOWN</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>A MIX</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>B MIX</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
        </div>
    </div>
 </div> 
      <!--End Dashboard Content-->
   <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>MIXING</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>TANDON</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>LAMPU DEPAN</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
        </div>
    </div>
 </div> 
      <!--End Dashboard Content-->  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>LAMPU BELAKANG</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>AIR NUTRISI</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>ALIR NUTRISI</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>LAMPU JALAN</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
        </div>
    </div>
 </div> 
      <!--End Dashboard Content-->  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
        </div>
    </div>
 </div> 
      <!--End Dashboard Content-->  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
				<h5><center>BLOWER</center></h5>
				<div class="row">
					<a href="relay1on.php" type="button" class="btn btn-primary btn-lg"><h4>ON</h4></a>
					<a href="relay1off.php" type="button" class="btn btn-danger btn-lg"><h4>OFF</h4></a>     
				</div>
                </div>
                <label><center><h6>Status: <?php echo $row['status']; ?></h6></center></label>
            </div>
        </div>
    </div>
 </div> 
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme2"></li>
        <li id="theme1"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
