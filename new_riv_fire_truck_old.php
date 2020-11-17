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
				<h5>Select Truck</h5>
			    <div class="panel panel-default" id="user_pnl">
				 <div class="panel-body">
				   <select class="browser-default custom-select" name="truck_registration">
					 <option selected >-----------------------</option>
					   <?php
						  while($row = mysqli_fetch_array($query_trucks)) {
							  $brand = $row['brand'];
							  $registration = $row['registration'];
							  echo "<option  value='$registration'>".$brand. " " .$registration. "</option>";
							}
						CloseCon($conn);
					 ?>
				   </select>
				  </div>
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
               <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver Cab</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Hydraulic Jack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_1" name="hydraulic_jack" >
							<label class="custom-control-label" for="check_1">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">AC Power Supply Cord</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_2" name="ac_power_supply_cord">
							<label class="custom-control-label" for="check_2">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Life Jackets</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_3" name="life_jacekts">
							<label class="custom-control-label" for="check_3">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Emergency Triangle</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_4" name="emergency_triangle">
							<label class="custom-control-label" for="check_4">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Small First Aid Kit</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_5" name="small_first_aid_kit">
							<label class="custom-control-label" for="check_5">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Tyre Spanner Set</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_6" name="tyre_spanner_set">
							<label class="custom-control-label" for="check_6">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Medical Gloves (Box)</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_7" name="medical_gloves_box">
							<label class="custom-control-label" for="check_7">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Dust Mask</div>
						<div class="divTableCell">10</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_8" name="dust_mask">
							<label class="custom-control-label" for="check_8">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Torch</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_9" name="torch">
							<label class="custom-control-label" for="check_9">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Winch Controller</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_10" name="winch_controller">
							<label class="custom-control-label" for="check_10">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>
                
			   <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Front Upper Locker 1</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">DCP Unit</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_11" name="dcp_unit">
							<label class="custom-control-label" for="check_11">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Nitrogen Cylinders</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_12" name="nitrogen_cyl">
							<label class="custom-control-label" for="check_12">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Power Gun</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_13" name="power_gun">
							<label class="custom-control-label" for="check_13">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Loop Sling</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_14" name="loop_sling">
							<label class="custom-control-label" for="check_14">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">DCP Hose Reel Winder</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_15" name="dcp_hose_reel">
							<label class="custom-control-label" for="check_15">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
			   <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Front Lower Locker 1</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Wolf Lamp and Charger</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_16" name="wolf_lamp_and_charger">
							<label class="custom-control-label" for="check_16">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Light Mast Control Unit</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_17" name="light_mast_control_unit">
							<label class="custom-control-label" for="check_17">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">HazMat Bag</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_18" name="haz_mat_bag">
							<label class="custom-control-label" for="check_18">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
               <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Middle Upper Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Portable Generator</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_19" name="portable_generator">
							<label class="custom-control-label" for="check_19">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spark Plug</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_20" name="spark_plug">
							<label class="custom-control-label" for="check_20">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spark Plug Spanner</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_21" name="spark_plug_spanner">
							<label class="custom-control-label" for="check_21">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
              <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Middle Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Tools Box</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_22" name="tools_box">
							<label class="custom-control-label" for="check_22">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rescue Line 90 meters</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_23" name="rescue_line_90_meters">
							<label class="custom-control-label" for="check_23">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">GP Line</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_24" name="gp_line">
							<label class="custom-control-label" for="check_24">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
              <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Rear Upper Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">4.5 DCP Fire Extinguisher</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_25" name="45_dcp_fire_extinguisher">
							<label class="custom-control-label" for="check_25">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">38 mm * 25m Hose</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_26" name="38_25_m_hose">
							<label class="custom-control-label" for="check_26">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">64 mm * 30m Hose</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_27" name="64_30_m_hose">
							<label class="custom-control-label" for="check_27">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Rear Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Hydrant F/Key</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_28" name="hydrant_f_key">
							<label class="custom-control-label" for="check_28">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cross Wheel Spanner</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_29" name="cross_wheel_spanner">
							<label class="custom-control-label" for="check_29">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">38 mm Branch</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_30" name="38_mm_branch">
							<label class="custom-control-label" for="check_30">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Driver's Rear Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Main Pump</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_31" name="main_pump">
							<label class="custom-control-label" for="check_31">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Suction Wrench</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_32" name="suction_wrench">
							<label class="custom-control-label" for="check_32">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
            <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Front Upper Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Line Rescue Helmets</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_" name="line_rescue_helmets" >
							<label class="custom-control-label" for="check_">Click</label>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">5Kg CO2 Fire Extinguisher</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_33" name="5kg_co2_fire_extinguisher">
							<label class="custom-control-label" for="check_33">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spade</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_34" name="spade">
							<label class="custom-control-label" for="check_34">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rescue Harness & Restraints</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_35" name="rescue_harness_restraints">
							<label class="custom-control-label" for="check_35">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Pinch Bar</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_36" name="pinch_bar">
							<label class="custom-control-label" for="check_36">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cooler Box</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_37" name="cooler_box">
							<label class="custom-control-label" for="check_37">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Hydrant Key</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_38" name="hydrant_key">
							<label class="custom-control-label" for="check_38">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rigging Plats & Anchor Straps</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_39" name="rigging_plats_anchor_straps">
							<label class="custom-control-label" for="check_39">Click</label></div>
						</div>
						</div>
					  </div>
			<!-- END TABLE -->
                      </div>
                    </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Front Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Dyna Medical Black Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_40" name="dyna_medical_black_pack">
							<label class="custom-control-label" for="check_40">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Para Guard Stretcher</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_41" name="para_guard_stretcher">
							<label class="custom-control-label" for="check_41">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Middle Upper Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">SCBA Sets</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_42" name="scba_sets">
							<label class="custom-control-label" for="check_42">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Fall Arresters Ascenders Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_43" name="fall_arresters_ascenders_pack">
							<label class="custom-control-label" for="check_43">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Auto Lock Descender Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_44" name="auto_lock_descender_pack">
							<label class="custom-control-label" for="check_44">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Locking Karabiners Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_45" name="locking_karabiners_pack">
							<label class="custom-control-label" for="check_45">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Middle Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Foam Drum</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_46" name="foam_drum">
							<label class="custom-control-label" for="check_46">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Pick Up Tube</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_47" name="pick_up_tube">
							<label class="custom-control-label" for="check_47">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Waste Disposal Plastic Bins</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_48" name="waste_disposal_plastic_bins">
							<label class="custom-control-label" for="check_48">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cafs Foam Branch</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_49" name="cafs_foam_branch">
							<label class="custom-control-label" for="check_49">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Rear Upper Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">CAFS System</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_50" name="cafs_system">
							<label class="custom-control-label" for="check_50">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Passenger Rear Lower Locker</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">38 mm * 25 mtr Hose</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_51" name="38_25_mtr_hose">
							<label class="custom-control-label" for="check_51">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Roof</div>
						<div class="divTableHead">QTY</div>
						<div class="divTableHead">Checked</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Extension Ladder</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_52" name="extension_ladder">
							<label class="custom-control-label" for="check_52">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Hard Suction Hose</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_53" name="hard_suction_hose">
							<label class="custom-control-label" for="check_53">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Mast Light</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_54" name="mast_light">
							<label class="custom-control-label" for="check_54">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
         <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
	            <div class="left d-flex align-items-center">
				<!-- TABLE -->
				  <div class="divTable cinereousTable" id="driver_from_upper_lock_1">
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">Water Level</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_55" name="water_level">
							<label class="custom-control-label" for="check_55">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Foam Level</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_56" name="foam_level">
							<label class="custom-control-label" for="check_56">Click</label></div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Diesel Level</div>
						<div class="divTableCell"><input type="checkbox" class="custom-control-input" id="check_57" name="diesel_level">
							<label class="custom-control-label" for="check_57">Click</label></div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
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