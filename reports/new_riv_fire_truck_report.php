<?php
//Establish DB Connection
#require_once("./core/db_conn.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/poc/core/db_conn.php';
$conn = OpenCon();
if(isset($_POST)){
	
	  if (isset($_POST["creation_ID"])){
		$creation_ID = $_POST["creation_ID"];
		}
						  
		$select_individual_report = "SELECT * FROM `new_tiv_fire_truck` where ID ='$creation_ID'" ;
	    $query_2 = $conn->query($select_individual_report);
						  
		$date_time_1 ="";
		while($row = mysqli_fetch_array($query_2)) {
			$creation_ID = $row["ID"];
			$surname= $row['surname'];
			$initials= $row['initials'];
			$id = $row['id_no'];
		    $date_time = $row['date_time'];
			$registration = $row['truck_registration'];
			$brand = $row['truck_brand'];
			$mode = $row['mode'];
			$hydraulic_jack = $row['hydraulic_jack'];
			$ac_power_supply_cord= $row['ac_power_supply_cord'];
			$life_jacekts = $row['life_jacekts'];
			$emergency_triangle= $row['emergency_triangle'];
			$small_first_aid_kit= $row['small_first_aid_kit'];
			$tyre_spanner_set = $row['tyre_spanner_set'];
			$medical_gloves_box = $row['medical_gloves_box'];
			$dust_mask = $row['dust_mask'];
			$torch = $row['torch'];
			$winch_controller = $row['winch_controller'];

			$dcp_unit = $row['dcp_unit'];
			$nitrogen_cyl = $row['nitrogen_cyl'];
			$power_gun = $row['power_gun'];
			$loop_sling = $row['loop_sling'];
			$dcp_hose_reel = $row['dcp_hose_reel'];

			$wolf_lamp_and_charger = $row['wolf_lamp_and_charger'];
			$light_mast_control_unit = $row['light_mast_control_unit'];
			$haz_mat_bag = $row['haz_mat_bag'];

			$portable_generator = $row['portable_generator'];
			$spark_plug = $row['spark_plug'];
			$spark_plug_spanner = $row['spark_plug_spanner'];

			$tools_box = $row['tools_box'];
			$rescue_line_90_meters = $row['rescue_line_90_meters'];
			$gp_line = $row['gp_line'];

			$_45_dcp_fire_extinguisher = $row['45_dcp_fire_extinguisher'];
			$_38_25_m_hose = $row['38_25_m_hose'];
			$_64_30_m_hose = $row['64_30_m_hose'];

			$hydrant_f_key = $row['hydrant_f_key'];
			$cross_wheel_spanner = $row['cross_wheel_spanner'];
			$_38_mm_branch = $row['38_mm_branch'];

			$main_pump = $row['main_pump'];
			$suction_wrench = $row['suction_wrench'];

			$line_rescue_helmets = $row['line_rescue_helmets'];
			$_5kg_co2_fire_extinguisher = $row['5kg_co2_fire_extinguisher'];
			$spade = $row['spade'];
			$rescue_harness_restraints = $row['rescue_harness_restraints'];
			$pinch_bar = $row['pinch_bar'];
			$cooler_box = $row['cooler_box'];
			$hydrant_key = $row['hydrant_key'];
			$rigging_plats_anchor_straps = $row['rigging_plats_anchor_straps'];

			$dyna_medical_black_pack = $row['dyna_medical_black_pack'];
			$para_guard_stretcher = $row['para_guard_stretcher'];

			$scba_sets = $row['scba_sets'];
			$fall_arresters_ascenders_pack = $row['fall_arresters_ascenders_pack'];
			$auto_lock_descender_pack = $row['auto_lock_descender_pack'];
			$locking_karabiners_pack = $row['locking_karabiners_pack'];

			$foam_drum = $row['foam_drum'];
			$pick_up_tube = $row['pick_up_tube'];
			$waste_disposal_plastic_bins = $row['waste_disposal_plastic_bins'];
			$cafs_foam_branch = $row['cafs_foam_branch'];

			$cafs_system = $row['cafs_system'];

			$_38_25_mtr_hose = $row['38_25_mtr_hose'];

			$extension_ladder = $row['extension_ladder'];
			$hard_suction_hose = $row['hard_suction_hose'];
			$mast_light = $row['mast_light'];

			$water_level = $row['water_level'];
			$foam_level = $row['foam_level'];
			$diesel_level = $row['diesel_level'];
						
			CloseCon($conn);
			
			
  }
}
?>
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
    <link rel="stylesheet" href="/poc/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="/poc/css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/poc/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/poc/css/custom.css">
	<link rel="stylesheet" href="/poc/css/tables.css">
	<link rel="stylesheet" href="/poc/css/bootstrap-responsive.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> 
  </head>
  
<body>
  <div style="width:22%;margin:auto;">
   <h3>Inventory</h3>
	 <div> <a href="/poc" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin:auto;margin-left:27%; margin-bottom: 3%;">HOME</a></div>
	 
  </div>
     <table class="table" style="width:46%; margin:auto;">
	   <thead>
    <tr>
      <th scope="col">Surname</th>
      <th scope="col">Initials</th>
      <th scope="col">ID</th>
	  <th scope="col">Mode</th>
	  <th scope="col">Truck Details</th>
    </tr>
  </thead>
   <tbody>
      <tr>
      <td><?php echo $surname; ?></td>
      <td><?php echo $initials; ?></td>
      <td><?php echo $id; ?></td>
	  <td><?php if ($mode == 1){
		  echo "DAY";
	      }
	     else{
		    echo "NIGHT";
		 }
		   
		  ?></td>
	  <td><?php echo $brand.' '.$registration; ?></td>
	  
    </tr>
   </tbody>
	 </table>
   </br>

           <div class="card-body" style="width:60%; margin:auto;">
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
							<h5><?php if($hydraulic_jack ==1){ echo "YES";}
									  else{ echo "NO";}
							?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">AC Power Supply Cord</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($ac_power_supply_cord ==1){ echo "YES";}
									  else{ echo "NO";}
							?></h5>
							
					     </div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Life Jackets</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell">
						<h5><?php if($life_jacekts ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Emergency Triangle</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($emergency_triangle ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Small First Aid Kit</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($small_first_aid_kit ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Tyre Spanner Set</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($tyre_spanner_set ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Medical Gloves (Box)</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($medical_gloves_box ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Dust Mask</div>
						<div class="divTableCell">10</div>
						<div class="divTableCell">
						<h5><?php if($dust_mask ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Torch</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($torch ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Winch Controller</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($winch_controller ==1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($dcp_unit == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Nitrogen Cylinders</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell">
						<h5><?php if($nitrogen_cyl == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Power Gun</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($power_gun == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Loop Sling</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($loop_sling == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">DCP Hose Reel Winder</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($dcp_hose_reel == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($wolf_lamp_and_charger == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Light Mast Control Unit</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($light_mast_control_unit == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">HazMat Bag</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($haz_mat_bag == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($portable_generator == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spark Plug</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($spark_plug == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spark Plug Spanner</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($spark_plug_spanner == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($tools_box == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rescue Line 90 meters</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($rescue_line_90_meters == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">GP Line</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($gp_line == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($_45_dcp_fire_extinguisher == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">38 mm * 25m Hose</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($_38_25_m_hose == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">64 mm * 30m Hose</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell">
						<h5><?php if($_64_30_m_hose == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($hydrant_f_key == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cross Wheel Spanner</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($cross_wheel_spanner == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">38 mm Branch</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell">
						<h5><?php if($_38_mm_branch == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($main_pump == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Suction Wrench</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($suction_wrench == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<h5><?php if($line_rescue_helmets == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">5Kg CO2 Fire Extinguisher</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($_5kg_co2_fire_extinguisher == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Spade</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($spade == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rescue Harness & Restraints</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell">
						<h5><?php if($rescue_harness_restraints == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Pinch Bar</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($pinch_bar == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cooler Box</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($cooler_box == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Hydrant Key</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($hydrant_key == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Rigging Plats & Anchor Straps</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($rigging_plats_anchor_straps == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($dyna_medical_black_pack == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Para Guard Stretcher</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($para_guard_stretcher == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($scba_sets == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Fall Arresters Ascenders Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($fall_arresters_ascenders_pack == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Auto Lock Descender Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($auto_lock_descender_pack == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Locking Karabiners Pack</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($locking_karabiners_pack == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($foam_drum == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Pick Up Tube</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell">
						<h5><?php if($pick_up_tube == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Waste Disposal Plastic Bins</div>
						<div class="divTableCell">2</div>
						<div class="divTableCell">
						<h5><?php if($waste_disposal_plastic_bins == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Cafs Foam Branch</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($cafs_foam_branch == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($cafs_system == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($_38_25_mtr_hose == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($extension_ladder == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Hard Suction Hose</div>
						<div class="divTableCell">4</div>
						<div class="divTableCell">
						<h5><?php if($hard_suction_hose == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Mast Light</div>
						<div class="divTableCell">1</div>
						<div class="divTableCell">
						<h5><?php if($mast_light == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
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
						<div class="divTableCell">
						<h5><?php if($water_level == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Foam Level</div>
						<div class="divTableCell">
						<h5><?php if($foam_level == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">Diesel Level</div>
						<div class="divTableCell">
						<h5><?php if($diesel_level == 1){ echo "YES";}
									  else{ echo "NO";}
						?></h5>
						</div>
						</div>
						</div>
                 </div>
				 <!--  END TABLE -->
			   </div>
              </div>
            </div>
</body>

