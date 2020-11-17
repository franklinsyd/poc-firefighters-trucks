<?php
//Establish DB Connection
#require_once("./core/db_conn.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/poc/core/db_conn.php';
$conn = OpenCon();
if(isset($_POST)){
	
	  if (isset($_POST["creation_ID"])){
		$creation_ID = $_POST["creation_ID"];
		}
		
                            
						  
		$select_individual_report = "SELECT * FROM `fire_safety_report` where ID ='$creation_ID'" ;
	    $query_2 = $conn->query($select_individual_report);
						  
		$date_time_1 ="";
		while($row = mysqli_fetch_array($query_2)) {
			$creation_ID = $row["ID"];
			$surname= $row['surname'];
			$initials= $row['initials'];
			$id = $row['id_no'];
		    $check_date = $row['check_date'];
			$building_name = $row['building_name'];
			$building_number = $row['building_number'];
			$inspection_supervisor = $row['inspection_supervisor'];
			
			
		    # 6 Questions
	      	$premises_kept_clear_yes = $row['premises_kept_clear_yes'];
			$premises_kept_clear_no = $row['premises_kept_clear_no'];
			$premises_kept_clear_com = $row['premises_kept_clear_com'];
			
	      	$clearly_labeled_yes = $row['clearly_labeled_yes'];
	      	$clearly_labeled_no = $row['clearly_labeled_no'];
			$clearly_labeled_com = $row['clearly_labeled_com'];
		
	      	$waste_removed_yes = $row['waste_removed_yes'];
	      	$waste_removed_no = $row['waste_removed_no'];
			$waste_removed_com = $row['waste_removed_com'];
      	
	      	$waste_safe_place_yes = $row['waste_safe_place_yes'];
	      	$waste_safe_place_no = $row['waste_safe_place_no'];
			$waste_safe_place_com = $row['waste_safe_place_com'];
			
	      	$pipe_beams_yes = $row['pipe_beams_yes'];
			$pipe_beams_no = $row['pipe_beams_no'];
			$pipe_beams_com = $row['pipe_beams_com'];
		
	      	$area_kept_free_yes = $row['area_kept_free_yes'];
			$area_kept_free_no =  $row['area_kept_free_no'];
			$area_kept_free_com =  $row['area_kept_free_com'];
		
		    # 5 Questions
	      	$are_gas_cyl_yes = $row['are_gas_cyl_yes'];
			$are_gas_cyl_no = $row['are_gas_cyl_no'];
			$are_gas_cyl_com = $row['are_gas_cyl_com'];
		
	      	$cyl_moved_yes = $row['cyl_moved_yes'];
			$cyl_moved_no = $row['cyl_moved_no'];
			$cyl_moved_com = $row['cyl_moved_com'];
			
	      	$empty_cylinders_yes = $row['empty_cylinders_yes'];
			$empty_cylinders_no  = $row['empty_cylinders_no'];
		    $empty_cylinders_com  = $row['empty_cylinders_com'];
		   
	      	$permanent_warning_notice_yes = $row['permanent_warning_notice_yes'];
			$permanent_warning_notice_no  = $row['permanent_warning_notice_no'];
			$permanent_warning_notice_com  = $row['permanent_warning_notice_com'];
		
	      	$cyl_valve_uppermost_yes = $row['cyl_valve_uppermost_yes'];
			$cyl_valve_uppermost_no  = $row['cyl_valve_uppermost_no'];
			$cyl_valve_uppermost_com  = $row['cyl_valve_uppermost_com'];
	 
	        # 5 Questions  - Bi
	      	$f_liquids_stores_yes = $row['f_liquids_stores_yes'];
			$f_liquids_stores_no  = $row['f_liquids_stores_no'];
			$f_liquids_stores_com  = $row['f_liquids_stores_com'];
		
	      	$f_liquids_uncongested_yes = $row['f_liquids_uncongested_yes'];
			$f_liquids_uncongested_no  = $row['f_liquids_uncongested_no'];
			$f_liquids_uncongested_com = $row['f_liquids_uncongested_com'];
			
	      	$f_liquids_containers_yes = $row['f_liquids_containers_yes'];
			$f_liquids_containers_no  = $row['f_liquids_containers_no'];
			$f_liquids_containers_com = $row['f_liquids_containers_com'];
			
	      	$f_liquids_minimum_yes = $row['f_liquids_minimum_yes'];
			$f_liquids_minimum_no =  $row['f_liquids_minimum_no'];
			$f_liquids_minimum_com = $row['f_liquids_minimum_com'];
			
	      	$f_liquids_away_yes = $row['f_liquids_away_yes'];
			$f_liquids_away_no = $row['f_liquids_away_no'];
			$f_liquids_away_com = $row['f_liquids_away_com'];
		    
			# 3 Questions
	      	$smoking_prohibited_yes = $row['smoking_prohibited_yes'];
	      	$smoking_prohibited_no = $row['smoking_prohibited_no'];
			$smoking_prohibited_com = $row['smoking_prohibited_com'];
		 
	      	$smoking_permitted_yes = $row['smoking_permitted_yes'];
	      	$smoking_permitted_no = $row['smoking_permitted_no'];
			$smoking_permitted_com = $row['smoking_permitted_com'];
			
	      	$receptacles_yes =  $row['receptacles_yes'];
			$receptacles_no =   $row['receptacles_no'];
			$receptacles_com = $row['receptacles_com'];
			
			# 3 Questions
	      	$cables_not_worn_yes =  $row['cables_not_worn_yes'];
			$cables_not_worn_no = $row['cables_not_worn_no'];
			$cables_not_worn_com = $row['cables_not_worn_com'];
			
	      	$sockets_good_yes =  $row['sockets_good_yes'];
			$sockets_good_no =  $row['sockets_good_no'];
			$sockets_good_com =  $row['sockets_good_com'];
			
	      	$power_point_yes = $row['power_point_yes'];
			$power_point_no = $row['power_point_no'];
			$power_point_com = $row['power_point_com'];
			
			# 4 Questions
	      	$exit_obstruction_yes = $row['exit_obstruction_yes'];
			$exit_obstruction_no =  $row['exit_obstruction_no'];
			$exit_obstruction_com =  $row['exit_obstruction_com'];
			
	      	$efficient_signage_yes =  $row['efficient_signage_yes'];
			$efficient_signage_no = $row['efficient_signage_no'];
			$efficient_signage_com = $row['efficient_signage_com'];
			
	      	$doors_open_freely_yes =  $row['doors_open_freely_yes'];
			$doors_open_freely_no =  $row['doors_open_freely_no'];
			$doors_open_freely_com =  $row['doors_open_freely_com'];
			
	      	$path_exit_doors_yes = $row['path_exit_doors_yes'];
			$path_exit_doors_no = $row['path_exit_doors_no'];
			$path_exit_doors_com = $row['path_exit_doors_com'];
			
			# 7 Questions
	      	$extinquishers_test_yes = $row['extinquishers_test_yes'];
			$extinquishers_test_no = $row['extinquishers_test_no'];
			$extinquishers_test_com = $row['extinquishers_test_com'];
			
	      	$extinquishers_correct_yes = $row['extinquishers_correct_yes'];
			$extinquishers_correct_no =  $row['extinquishers_correct_no'];
			$extinquishers_correct_com =  $row['extinquishers_correct_com'];
			
	      	$extinquishers_accessible_yes =  $row['extinquishers_accessible_yes'];
			$extinquishers_accessible_no = $row['extinquishers_accessible_no'];
			$extinquishers_accessible_com = $row['extinquishers_accessible_com'];
			
	      	$signage_displayed_yes =  $row['signage_displayed_yes'];
			$signage_displayed_no =  $row['signage_displayed_no'];
			$signage_displayed_com =  $row['signage_displayed_com'];
			
	      	$emal_displayed_yes = $row['emal_displayed_yes'];
			$emal_displayed_no = $row['emal_displayed_no'];
			$emal_displayed_com = $row['emal_displayed_com'];
			
	      	$manual_call_yes =  $row['manual_call_yes'];
			$manual_call_no =  $row['manual_call_no'];
			$manual_call_com =  $row['manual_call_com'];
			
	      	$fire_panel_good_yes = $row['fire_panel_good_yes'];
			$fire_panel_good_no = $row['fire_panel_good_no'];
			$fire_panel_good_com = $row['fire_panel_good_com'];
			
			#Additional checks
			
			$a_check_1 =  $row['a_check_1'];
			$a_check_1_com =  $row['a_check_1_com'];
			$add_check_1_yes = $row['add_check_1_yes'];
			$add_check_1_no = $row['add_check_1_no'];
			
			$a_check_2 =  $row['a_check_2'];
			$a_check_2_com =  $row['a_check_2_com'];
			$add_check_2_yes = $row['add_check_2_yes'];
			$add_check_2_no = $row['add_check_2_no'];
			
			$a_check_3 =  $row['a_check_3'];
			$a_check_3_com =  $row['a_check_3_com'];
			$add_check_3_yes = $row['add_check_3_yes'];
			$add_check_3_no = $row['add_check_3_no'];
			
			$a_check_4 =  $row['a_check_4'];
			$a_check_4_com =  $row['a_check_4_com'];
			$add_check_4_yes = $row['add_check_4_yes'];
			$add_check_4_no = $row['add_check_4_no'];
			
			$a_check_5 =  $row['a_check_5'];
			$a_check_5_com =  $row['a_check_5_com'];
			$add_check_5_yes = $row['add_check_5_yes'];
			$add_check_5_no = $row['add_check_5_no'];
			
		}
		
						
	  CloseCon($conn);
			
			
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
   <h3>Fire Safety Inspection</h3>
	 <div> <a href="/poc" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin:auto;margin-left:27%; margin-bottom: 3%;">HOME</a></div>
	 
  </div>
  
    <table class="table" style="width:46%; margin:auto;">
	   <thead>
    <tr>
      <th scope="col">Surname</th>
      <th scope="col">Initials</th>
      <th scope="col">ID</th>
    </tr>
  </thead>
   <tbody>
      <tr>
      <td><?php echo $surname; ?></td>
      <td><?php echo $initials; ?></td>
      <td><?php echo $id; ?></td>
	  
    </tr>
   </tbody>
	 </table>
 
              <div class="row" style="width:60%; margin:auto;">
              <div class="">
                <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <div>
    				<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg .tg-cly1{text-align:left;vertical-align:middle}
					.tg .tg-0lax{text-align:left;vertical-align:top}
					</style>
					<table class="tg" style="undefined;table-layout: fixed; width: 55%">
					<colgroup>
					<col style="width: 153px">
					<col style="width: 174px">
					</colgroup>
					  <tr>
						<th class="tg-cly1"><span style="font-weight:bold">Date</span>: </th>
						<th class="tg-cly1"><h5><?php echo $check_date; ?></h5></th>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Building Name: </span></td>
						<td class="tg-cly1"><h5><?php echo $building_name; ?></h5></td>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Building Number:</span> </td>
						<td class="tg-cly1"><h5><?php echo $building_number; ?></td>
					  </tr>
					  
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Inspection Supervisor:</span> </td>
						<td class="tg-cly1"><h5><?php echo $inspection_supervisor; ?></td>
					  </tr>
					</table>
				  </div>
				  </br>
                 <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Cleanliness and general housekeeping</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are the premises kept clear of combustible process waste, dust and refuse?  </div>
						<div class="divTableCell">
							<h5><?php if($premises_kept_clear_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $premises_kept_clear_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are separate clearly labeled containers provided for waste and special hazard ?  </div>
						<div class="divTableCell">
							<h5><?php if($clearly_labeled_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $clearly_labeled_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Is waste removed from the building at end of each day or more often if necessary ? </div>
						<div class="divTableCell">
							<h5><?php if($waste_removed_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
					
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $waste_removed_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Is waste put in a safe place awaiting disposal ? </div>
						<div class="divTableCell">
							<h5><?php if($waste_safe_place_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $waste_safe_place_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are pipe, beams, ledges, ducting and electric fittings clean and from dust ? </div>
						<div class="divTableCell">
							<h5><?php if($pipe_beams_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $pipe_beams_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6. Are area in and around the building kept free from accumulated packaging materials and pallets ? </div>
						<div class="divTableCell">
							<h5><?php if($area_kept_free_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $area_kept_free_com; ?></h5> 
						</div>
						
					  </div>
                      </div>
					  
					  <div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Gas Cylinders</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are gas cylinders stored safely ? </div>
						<div class="divTableCell">
							<h5><?php if($are_gas_cyl_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $are_gas_cyl_com; ?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are gas cylinders moved to a fenced compound outdoors when not in use ? </div>
						<div class="divTableCell">
							<h5><?php if($cyl_moved_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $cyl_moved_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are empty cylinders treated in the same mannaer, but kept separate and labeled empty ?</div>
						<div class="divTableCell">
							<h5><?php if($empty_cylinders_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $empty_cylinders_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Are permanent warning notices prominently displayed prohibiting smoking and naked lights ? </div>
						<div class="divTableCell">
							<h5><?php if($permanent_warning_notice_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $permanent_warning_notice_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are cylinders stored with their valves uppermost ? </div>
						<div class="divTableCell">
							<h5><?php if($cyl_valve_uppermost_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $cyl_valve_uppermost_com; ?></h5>
						</div>
						</div>
						</div>
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Control of Flammable liquids</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are all stocks flammable liquids kept in purpose built flammable liquid stores ?  </div>
						<div class="divTableCell">
							<h5><?php if($f_liquids_stores_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $f_liquids_stores_com; ?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Is the flammable liquid store kept uncongested and tidy ? </div>
						<div class="divTableCell">
							<h5><?php if($f_liquids_uncongested_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $f_liquids_uncongested_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are flammable liquids carried in specially designed containers and not in open cans or buckets ?  </div>
						<div class="divTableCell">
							<h5><?php if($f_liquids_containers_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $f_liquids_containers_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Are quantities of flammable liquids in use kept to minimum ?  </div>
						<div class="divTableCell">
							<h5><?php if($f_liquids_minimum_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $f_liquids_minimum_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are flammable liquids kept away from possible sources of ignition ? </div>
						<div class="divTableCell">
							<h5><?php if($f_liquids_away_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $f_liquids_away_com; ?></h5>
						</div>
						</div>
						
						</div>
						
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Smoking</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Is smoking prohibited in all but designated smoking areas ?  </div>
						<div class="divTableCell">
							<h5><?php if($smoking_prohibited_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $smoking_prohibited_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Where smoking is permitted are there enough non-combustible receptac;es for cigarettes ends ?  </div>
						<div class="divTableCell">
							<h5><?php if($smoking_permitted_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $smoking_permitted_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are these receptacles indentifiable from general waste ?</div>
						<div class="divTableCell">
							<h5><?php if($receptacles_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $receptacles_com; ?></h5>
						</div>
						</div>
						
						</div>
						
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Electrical equipment</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are electrical cords and cables in good condition and not worn or frayed ? </div>
						<div class="divTableCell">
							<h5><?php if($cables_not_worn_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $cables_not_worn_com; ?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are electrical wall sockets in good condition and not cracked or damaged ? </div>
						<div class="divTableCell">
							<h5><?php if($sockets_good_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $sockets_good_com; ?></h5>
						</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are power points suitable loaded (not overloaded with too many plugs) ? </div>
						<div class="divTableCell">
							<h5><?php if($power_point_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $power_point_com; ?></h5>
						</div>
						</div>
						
						</div>
						
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Means of Escape</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are exit ways free of obstruction such as stored goods and rubbish? </div>
						<div class="divTableCell">
							<h5><?php if($exit_obstruction_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $exit_obstruction_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Do exits have correct and efficient signage ?  </div>
						<div class="divTableCell">
							<h5><?php if($efficient_signage_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $efficient_signage_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Do exits doors open freely and easily ?  </div>
						<div class="divTableCell">
							<h5><?php if($doors_open_freely_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $doors_open_freely_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Does the path from all exit doors lead to safety ?   </div>
						<div class="divTableCell">
							<h5><?php if($path_exit_doors_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $path_exit_doors_com; ?></h5>
						</div>
						</div>
						
						</div>
						
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Control of Flammable liquids</div>
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are all extinquishers and hose reels within test date ? </div>
						<div class="divTableCell">
							<h5><?php if($extinquishers_test_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $extinquishers_test_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Do all extinguishers have correct signage displayed ? </div>
						<div class="divTableCell">
							<h5><?php if($extinquishers_correct_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $extinquishers_correct_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are all extinguishers and hose reels accessible (not blocked or covered by items) ?  </div>
						<div class="divTableCell">
							<h5><?php if($extinquishers_accessible_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $extinquishers_accessible_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Is there signage displayed to tell occupants what to do in the event of fire ?   </div>
						<div class="divTableCell">
							<h5><?php if($signage_displayed_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $signage_displayed_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Is the EMAL emergency number displayed ? </div>
						<div class="divTableCell">
							<h5><?php if($emal_displayed_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $emal_displayed_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6. Are manual call points in good conition ? </div>
						<div class="divTableCell">
							<h5><?php if($manual_call_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $manual_call_com; ?></h5>
						</div>
						</div>
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >7. Is the fire panel in good condition and showing normal ?</div>
						<div class="divTableCell">
							<h5><?php if($fire_panel_good_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $fire_panel_good_com; ?></h5>
						</div>
						</div>
						 
						<!-- Additional checks --->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><h3>Additional Checks</h3></div>
						</div>
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p><?php echo $a_check_1; ?></p></div>
						<div class="divTableCell">
							<h5><?php if($add_check_1_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $a_check_1_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p><?php echo $a_check_2; ?></p></div>
						<div class="divTableCell">
							<h5><?php if($add_check_2_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $a_check_2_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p><?php echo $a_check_3; ?></p></div>
						<div class="divTableCell">
							<h5><?php if($add_check_3_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $a_check_3_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p><?php echo $a_check_4; ?></p></div>
						<div class="divTableCell">
							<h5><?php if($add_check_4_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $a_check_4_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p><?php echo $a_check_5; ?></p></div>
						<div class="divTableCell">
							<h5><?php if($add_check_5_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $a_check_5_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						</div>

                    </div>
             <!-- END TABLE -->
			 
			 
			 
			   </div>
              </div>
            </div>
        </div>

  
  
</body>

