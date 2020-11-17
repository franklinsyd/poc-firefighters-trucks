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

	#create user query
	$select_all_users_query = "SELECT * FROM `user_table`";
	$query = $conn->query($select_all_users_query);
	
	#create truck query
	
    $select_all_trucks_query = "SELECT * FROM `trucks`";
	$query_trucks = $conn->query($select_all_trucks_query);
	
	

?>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">Inventory</a>
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
          
		  <form method="POST" action ="core/process_new_riv_fire_truck.php" onsubmit="return confirm('Are you sure everything is correct?');">
             <section class="py-5">
				<h5>Select Your Username</h5>
			    <div class="panel panel-default" id="user_pnl">
				 <div class="panel-body">
				   <select class="browser-default custom-select" name="user_id">
					 <option selected >-----------------------</option>
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
				<h5>Select Existing Truck</h5>
			    <div class="panel panel-default" id="user_pnl">
				 <div class="panel-body">
				   <select class="browser-default custom-select" name="truck_registration">
					 <option selected >-----------------------</option>
					   <?php
						  while($row = mysqli_fetch_array($query_trucks)) {
							  $brand = $row['brand'];
							  $registration = $row['registration'];
							  echo "<option  value='$brand - $registration'>".$brand. " " .$registration. "</option>";
							}
						CloseCon($conn);
					 ?>
				   </select>
				  </div>
				  </br>
				  <a href="/poc/add_truck.php" class="btn btn-primary">Add New Truck</a>
				</div>
          </section> 
		  
		  
         
            <section>
            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-5 mb-lg-0">         
                  <div class="card-header">
                    <h2 class="h6 mb-0 text-uppercase">Check List Activities</h2>
                  </div>

           <div class="card-body">
                  <div>
				   <p>Select a date </p>
                   <input type="date" name="check_date" style="width:200px;" class="form_datetime">
				   </br></br>
				   	<label for="exampleFormControlSelect1">Select the time of duty </label>
					<select class="form-control" id="exampleFormControlSelect1" name ="mode" style="width:200px;">
					  <option>Day</option>
					  <option>Night</option>
					</select>
					</br>
				  </div>
			   <!-- LOCKER 1 -->
               <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead"><input type="text" id="locker_1" name="locker_1_name"></div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_1" name="l1_item_1_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q1" name="l1_q1_name"></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="l1_check_1" name="l1_check_1_name" >
							<label class="custom-control-label" for="l1_check_1">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_2" name="l1_item_2_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q2" name="l1_q2_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_2" name="l1_check_2_name">
							<label class="custom-control-label" for="l1_check_2">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_3" name="l1_item_3_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q3" name="l1_q3_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_3" name="l1_check_3_name">
							<label class="custom-control-label" for="l1_check_3">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_4" name="l1_item_4_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q4" name="l1_q4_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_4" name="l1_check_4_name">
							<label class="custom-control-label" for="l1_check_4">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_5" name="l1_item_5_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q5" name="l1_q5_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_5" name="l1_check_5_name">
							<label class="custom-control-label" for="l1_check_5">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_6" name="l1_item_6_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q6" name="l1_q6_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_6" name="l1_check_6_name">
							<label class="custom-control-label" for="l1_check_6">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_7" name="l1_item_7_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q7" name="l1_q7_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_7" name="l1_check_7_name">
							<label class="custom-control-label" for="l1_check_7">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_8" name="l1_item_8_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q8" name="l1_q8_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_8" name="l1_check_8_name">
							<label class="custom-control-label" for="l1_check_8">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_9" name="l1_item_9_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q9" name="l1_q9_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_9" name="l1_check_9_name">
							<label class="custom-control-label" for="l1_check_9">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_10" name="l1_item_10_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q10" name="l1_q10_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_10" name="l1_check_10_name">
							<label class="custom-control-label" for="l1_check_10">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>
					
			<!-- LOCKER 2 -->
				 <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead"><input type="text" id="locker_1" name="locker_1_name"></div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_1" name="l1_item_1_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q1" name="l1_q1_name"></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="l1_check_1" name="l1_check_1_name" >
							<label class="custom-control-label" for="l1_check_1">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_2" name="l1_item_2_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q2" name="l1_q2_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_2" name="l1_check_2_name">
							<label class="custom-control-label" for="l1_check_2">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_3" name="l1_item_3_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q3" name="l1_q3_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_3" name="l1_check_3_name">
							<label class="custom-control-label" for="l1_check_3">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_4" name="l1_item_4_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q4" name="l1_q4_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_4" name="l1_check_4_name">
							<label class="custom-control-label" for="l1_check_4">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_5" name="l1_item_5_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q5" name="l1_q5_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_5" name="l1_check_5_name">
							<label class="custom-control-label" for="l1_check_5">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>
					
					
			<!-- LOCKER 3 -->
				 <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead"><input type="text" id="locker_1" name="locker_1_name"></div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_1" name="l1_item_1_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q1" name="l1_q1_name"></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="l1_check_1" name="l1_check_1_name" >
							<label class="custom-control-label" for="l1_check_1">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_2" name="l1_item_2_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q2" name="l1_q2_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_2" name="l1_check_2_name">
							<label class="custom-control-label" for="l1_check_2">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_3" name="l1_item_3_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q3" name="l1_q3_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_3" name="l1_check_3_name">
							<label class="custom-control-label" for="l1_check_3">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_4" name="l1_item_4_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q4" name="l1_q4_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_4" name="l1_check_4_name">
							<label class="custom-control-label" for="l1_check_4">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_5" name="l1_item_5_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q5" name="l1_q5_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_5" name="l1_check_5_name">
							<label class="custom-control-label" for="l1_check_5">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>	
					
			<!-- LOCKER 4 -->
				 <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead"><input type="text" id="locker_1" name="locker_1_name"></div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_1" name="l1_item_1_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q1" name="l1_q1_name"></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="l1_check_1" name="l1_check_1_name" >
							<label class="custom-control-label" for="l1_check_1">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_2" name="l1_item_2_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q2" name="l1_q2_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_2" name="l1_check_2_name">
							<label class="custom-control-label" for="l1_check_2">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_3" name="l1_item_3_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q3" name="l1_q3_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_3" name="l1_check_3_name">
							<label class="custom-control-label" for="l1_check_3">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_4" name="l1_item_4_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q4" name="l1_q4_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_4" name="l1_check_4_name">
							<label class="custom-control-label" for="l1_check_4">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell"><input type="text" id="l1_item_5" name="l1_item_5_name"></div>
						<div class="divTableCell"><input type="text" id="l1_q5" name="l1_q5_name"></div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="l1_check_5" name="l1_check_5_name">
							<label class="custom-control-label" for="l1_check_5">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>	
                
			   <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	 
              </div>
               <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
	
			   </div>
              </div>
       
            </div>
        </div>

		<button type="submit" onclick="myFunction()" id ="btn_1_new_riv" class="btn btn-primary">Confirm Selections</button>
		</form>
		
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
	<script src="js/custom_confirm.js"></script>
	

</div>

  </body>
</html>