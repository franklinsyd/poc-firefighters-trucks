<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reports</title>
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
	<link rel="stylesheet" href="css/tables.css">
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
	$user_id = "";
	$report_type = "";
	if(isset($_POST["user_id"])){
			 
	    $user_id = $_POST["user_id"];
    }
	
	if(isset($_POST["report_type"])){
			 
	   $report_type = $_POST["report_type"];
    }
	#create query
	$select_all_users_query = "SELECT * FROM `user_table`";
	$query = $conn->query($select_all_users_query);
	
	
	#Query to get report list 
	if ($report_type == "New Riv Fire Truck") {
		
		$select_all_reports = "SELECT * FROM `new_tiv_fire_truck` where id_no ='$user_id'" ;
		$query_1 = $conn->query($select_all_reports);
	
	}
	elseif ($report_type == "Fire Drill Evac."){
		
		$select_all_reports = "SELECT * FROM `fire_drill_report` where id_no ='$user_id'" ;
		$query_3 = $conn->query($select_all_reports);
		
	}
	elseif ($report_type == "Fire Safety Inspection"){
		
		$select_all_reports = "SELECT * FROM `fire_safety_report` where id_no ='$user_id'" ;
		$query_5 = $conn->query($select_all_reports);
		
	}
	elseif ($report_type == "Risk Assessment Report"){
		
		$select_all_reports = "SELECT * FROM `risk_assess_report` where id_no ='$user_id'" ;
		$query_10 = $conn->query($select_all_reports);
		
	}
    #echo $report_type;
?>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base"> NEW RIV FIRE TRUCK</a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted "><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
			  <li class="sidebar-list-item"><a href="new_riv_fire_truck.php"class="sidebar-link active"><i class="o-survey-1 mr-3 text-gray"></i><span>New Riv Fire Truck</span></a></li>
			  <li class="sidebar-list-item"><a href="add_user.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Register</span></a></li>

        </ul>
  
      </div>
      <div class="page-holder w-100 d-flex flex-wrap ">
        <div class="container-fluid px-xl-5">
          
		  <form method="POST" action ="#">
             <section class="py-5">
				<h5>Select Your Username</h5>
			    <div class="panel panel-default" id="user_pnl">
				 <div class="panel-body">
				   <select class="browser-default custom-select" name="user_id">
					 <option selected >Select Your Username</option>
					   <?php
						  while($row = mysqli_fetch_array($query)) {
							  $surname= $row['surname'];
							  $id = $row['id_no'];
							  echo "<option  value='$id'>".$surname. " " .$id. "</option>";
							}
						CloseCon($conn);
					 ?>
				   </select>
				  </div>
				</div>
				</br>
			   <h5>Select the Report Type</h5>
			   <div class="panel panel-default" id="user_pnl">
				 <div class="panel-body">
				   <select class="browser-default custom-select" name="report_type">
					 <option selected >Report Type</option>
					 <option>New Riv Fire Truck </option>
					 <option>Fire Drill Evac. </option>
					 <option>Fire Safety Inspection </option>
					 <option>Risk Assessment Report</option>
				   </select></br>
				  </div>
				  </br>
				   <button type="submit"  id ="get_report" class="btn btn-primary">Load Report Type</button> 
				</div>
          </section> 
		  
		</form>
		
		</br>
		
		<form method="POST" action ="reports/new_riv_fire_truck_report.php">
		 <div class="panel-body">
		<select class="browser-default custom-select" name="creation_ID" style = "width: 30%;" >
					 
					<?php 
					
						   while($row = mysqli_fetch_array($query_1)) {
								$creation_ID = $row["ID"];
								$surname= $row['surname'];
								$id = $row['id_no'];
								$date_time = $row['date_time'];
								echo "<option selected value='$creation_ID'>".$surname. " " .$id." ".  $date_time."</option>";
								}
									#CloseCon($conn);
									
									
						  if (isset($_POST["creation_ID"])){
							  $creation_ID = $_POST["creation_ID"];
						  }
						  
						  
						  $select_individual_report = "SELECT * FROM `new_tiv_fire_truck` where ID ='$creation_ID'" ;
	                      $query_2 = $conn->query($select_individual_report);
						  
						  $date_time_1 ="";
						  while($row = mysqli_fetch_array($query_2)) {
							  $creation_ID = $row["ID"];
							  $surname= $row['surname'];
							  $id = $row['id_no'];
						      $date_time_1 = $row['date_time'];
								}
							CloseCon($conn);
						  
						  
					?>
		</select>
		<button type="submit"  id ="get_report_1" class="btn btn-primary"  style="width:17%" disabled> Report: Inventory</button> 
		</div>
		</br>
		</form>
		
		
		
		<form method="POST" action ="reports/fire_drill_evac_report.php">
		 <div class="panel-body">
		<select class="browser-default custom-select" name="creation_ID" style = "width: 30%;" >
					
					<?php 
					
						   while($row = mysqli_fetch_array($query_3)) {
								$creation_ID = $row["ID"];
								$surname= $row['surname'];
								$id = $row['id_no'];
								$date_time = $row['date_time'];
								echo "<option  selected value='$creation_ID'>".$surname. " " .$id."".  $date_time."</option>";
								}
									#CloseCon($conn);
									
									
						  if (isset($_POST["creation_ID"])){
							  $creation_ID = $_POST["creation_ID"];
						  }
						  
						  
						  $select_individual_report = "SELECT * FROM `fire_drill_report` where ID ='$creation_ID'" ;
	                      $query_4 = $conn->query($select_individual_report);
						  
						  $date_time_1 ="";
						  while($row = mysqli_fetch_array($query_4)) {
							  $creation_ID = $row["ID"];
							  $surname= $row['surname'];
							  $id = $row['id_no'];
						      $date_time_1 = $row['date_time'];
								}
							CloseCon($conn);
						  
						  
					?>
		</select>
		<button type="submit"  id ="get_report_2" class="btn btn-primary" style="width:17%" > Report: Fire Drill</button> 
		</div>
		</br>
		</form>
	  
	  <form method="POST" action ="reports/fire_safety_inspection_report.php">
		 <div class="panel-body">
		<select class="browser-default custom-select" name="creation_ID" style = "width: 30%;" >
					
					<?php 
					
						   while($row = mysqli_fetch_array($query_5)) {
								$creation_ID = $row["ID"];
								$surname= $row['surname'];
								$id = $row['id_no'];
								$date_time = $row['check_date'];
								echo "<option  selected value='$creation_ID'>".$surname. " " .$id." ".  $date_time."</option>";
								}
									#CloseCon($conn);
									
									
						  if (isset($_POST["creation_ID"])){
							  $creation_ID = $_POST["creation_ID"];
						  }
						  
						  
						  $select_individual_report = "SELECT * FROM `fire_safety_report` where ID ='$creation_ID'" ;
	                      $query_6 = $conn->query($select_individual_report);
						  
						  $date_time_1 ="";
						  while($row = mysqli_fetch_array($query_6)) {
							  $creation_ID = $row["ID"];
							  $surname= $row['surname'];
							  $id = $row['id_no'];
						      $date_time_1 = $row['check_date'];
								}
							CloseCon($conn);
						  
						  
					?>
		</select>
		<button type="submit"  id ="get_report_3" class="btn btn-primary" style="width:17%" > Report: Safety Inspection</button> 
		</div>
		</br>
		</form>
		</br>

		<form method="POST" action ="reports/risk_assess_report.php">
		 <div class="panel-body">
		<select class="browser-default custom-select" name="creation_ID" style = "width: 30%;" >
					
					<?php 
					
						   while($row = mysqli_fetch_array($query_10)) {
								$creation_ID = $row["ID"];
								$surname= $row['surname'];
								$id = $row['id_no'];
								$date_time = $row['date_of_issue'];
								echo "<option  selected value='$creation_ID'>".$surname. " " .$id." ".  $date_time."</option>";
								}
									
						  if (isset($_POST["creation_ID"])){
							  $creation_ID = $_POST["creation_ID"];
						  }
						  
						  
						  $select_individual_report = "SELECT * FROM `risk_assess_report` where ID ='$creation_ID'" ;
	                      $query_11 = $conn->query($select_individual_report);
						  
						  $date_time_1 ="";
						  while($row = mysqli_fetch_array($query_11)) {
							  $creation_ID = $row["ID"];
							  $surname= $row['surname'];
							  $id = $row['id_no'];
						      $date_time_1 = $row['date_of_issue'];
								}
							CloseCon($conn);
						  
					?>
		</select>
		<button type="submit"  id ="get_report_3" class="btn btn-primary" style="width:17%" > Report: Risk Assessment</button> 
		</div>
		</br>
		</form>
		
         <p>Date Time : <?php echo $date_time_1; ?> </p>
		 
		 
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
	<script src="js/custom_confirm.js"></script>
	

</div>

  </body>
</html>