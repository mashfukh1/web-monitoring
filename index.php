<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <meta http-equiv="refresh" content="20" />
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
  <?php
    include('ceksensor.php');
     $data = mysqli_query($koneksi, "SELECT * FROM logtabel");
     $row  = mysqli_fetch_array($data);
     $Time = mysqli_query($koneksi, "SELECT Time FROM logtabel ");
     $Temperature    = mysqli_query($koneksi,  "SELECT Temperature FROM logtabel ");
   ?>
</head>
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
        <a href="index3.php">
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
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
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

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $row['Temperature']; ?><span class="float-right"><i class="fa fa-tint"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:<?php echo $row['Temperature']; ?>%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Temperature</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $row['Humidity']; ?><span class="float-right"><i class="fa fa-tint"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:<?php echo $row['Humidity']; ?>%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Humidity </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $row['PH']; ?><span class="float-right"><i class="fa fa-bars"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:<?php echo $row['PH']; ?>%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">PH</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $row['PPM']; ?><span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:<?php echo $row['PPM']; ?>%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">PPM</p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Temperature Graphic
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Download Gambar</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
        <div class="container">
            <canvas id="myChart" width="100" height="41"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($Time)) { echo '"' . $b['Time'] . '",';}?>],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php while ($p = mysqli_fetch_array($Temperature)) { echo '"' . $p['Temperature'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
           </script>
		 </div>
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Nama Gambar : <?php echo $row['File Name']; ?> - Take : <?php echo $row['Time Picture']; ?>
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Download gambar
              <a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a>
              </a>
               </div>
              </div>
             </div>
           </div>
            <div class="card-body">
		    <?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "emtech-sgh";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
							}
					$sql = "SELECT No,Humidity,image FROM logtabel order by No desc LIMIT 1 ";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'. "<br>";
						}
					}
					else {
						echo "0 results";
					}
					$conn->close();
				?>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Order Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Download logdata</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>No</th>
                     <th>Time</th>
                     <th>Temperature</th>
                     <th>Humidity</th>
                     <th>PH</th>
                     <th>PPM</th>
                   </tr>
                   <?php
                   $hostname = "localhost";		//example = localhost or 192.168.0.0
				   $username = "root";		//example = root
				   $password = "";	
		           $dbname = "emtech-sgh";
		          // Create connection
		           $conn = mysqli_connect($hostname, $username, $password, $dbname);
				   $table = mysqli_query($conn, "SELECT No, Time, Temperature, Humidity, PH, PPM FROM logtabel order by No desc LIMIT 6"); //nodemcu_ldr_table = Youre_table_name
				   while($row = mysqli_fetch_array($table))
						{
				   ?>
					<tr>
					<td><?php echo $row["No"]; ?></td>
					<td><?php echo $row["Time"]; ?></td>
					<td><?php echo $row["Temperature"]; ?></td>
					<td><?php echo $row["Humidity"]; ?></td>
					<td><?php echo $row["PH"]; ?></td>
					<td><?php echo $row["PPM"]; ?></td>
					</tr>
					<?php
					}
					?>
                   </thead>
                  </table>
               </div>
			</div>
		</div>
	</div><!--End Row-->

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
