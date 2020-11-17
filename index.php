<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POC Equipment Check List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	 <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> 
  </head>
  
<?php 
require_once("core/db_conn.php");
$conn = OpenCon();

	#create query
	$select_all_users_query = "SELECT * FROM `user_table`";
	$query = $conn->query($select_all_users_query);

?>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base"> Checklist Dashboard</a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
			  <li class="sidebar-list-item"><a href="add_user.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Register User</span></a></li>
			  <li class="sidebar-list-item"><a href="add_truck.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Add Truck</span></a></li>
			  <li class="sidebar-list-item"><a href="reports.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Reports</span></a></li>

        </ul>
  
      </div>
      <div class="page-holder w-100 d-flex flex-wrap ">
        <div class="container-fluid px-xl-5">
          
        <section class="py-5">
			<div id ="features_link">
			<a href="/poc/new_riv_fire_truck.php" style="color:white;"><button type="submit"  class="btn btn-outline-primary">Inventory</button></a>
			<a href="/poc/fire_evac_drill.php" style="color:white;"><button type="submit"  class="btn btn-outline-secondary">Fire Drill Evacuation Report</button></a>
			<a href="/poc/fire_safety_inspection.php" style="color:white;"><button type="submit"  class="btn btn-outline-secondary">Fire Safety Inspection</button></a> 
			<a href="/poc/risk_assess.php" style="color:white;"><button type="submit"  class="btn btn-outline-secondary">Risk Assessment</button></a>
            </div>			
		
		</section> 
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">POC Equipment Check List&copy; 2019</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Built by SMK </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
	

</div>

  </body>
</html>