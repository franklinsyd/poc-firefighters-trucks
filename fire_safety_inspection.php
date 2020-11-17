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

	#create query
	$select_all_users_query = "SELECT * FROM `user_table`";
	$query = $conn->query($select_all_users_query);

?>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">FIRE SAFETY INSPECTION</a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted "><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
			  <li class="sidebar-list-item"><a href="fire_evac_drill.php"class="sidebar-link active"><i class="o-survey-1 mr-3 text-gray"></i><span>Fire Evacuation</span></a></li>
			  <li class="sidebar-list-item"><a href="add_user.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Register</span></a></li>

        </ul>
  
      </div>
      <div class="page-holder w-100 d-flex flex-wrap ">
        <div class="container-fluid px-xl-5">
          
		  <form method="POST" action ="core/process_safety_inspection.php" onsubmit="return confirm('Are you sure everything is correct?');">
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
          </section> 
         
            <section>
            <div class="row">
              <div class=""> <!--<div class="col-lg-8">-->
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
						<th class="tg-cly1"><input type="date" name="check_date" class="form_datetime"></th>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Building Name: </span></td>
						<td class="tg-cly1"><textarea rows="2" cols="20" name="building_name"></textarea> </td>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Building Number:</span> </td>
						<td class="tg-cly1"><input type="textbox" name="building_number" ></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Inspection Supervisor:</span><br></td>
						<td class="tg-0lax"><input type="textbox" name="inspection_supervisor" ></td>
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
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are the premises kept clear of combustible process waste, dust and refuse? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_1" name="premises_kept_clear_yes"  onclick="no_1()">
							<label class="custom-control-label" for="check_1">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_10" name="premises_kept_clear_no" >
							<label class="custom-control-label" for="check_10">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="premises_kept_clear_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are separate clearly labeled containers provided for waste and special hazard ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_2" name="clearly_labeled_yes" onclick="no_2()" >
							<label class="custom-control-label" for="check_2">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_20" name="clearly_labeled_no" >
							<label class="custom-control-label" for="check_20">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="clearly_labeled_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Is waste removed from the building at end of each day or more often if necessary ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_3" name="waste_removed_yes" onclick="no_3()" >
							<label class="custom-control-label" for="check_3">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_30" name="waste_removed_no" >
							<label class="custom-control-label" for="check_30">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="waste_removed_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Is waste put in a safe place awaiting disposal  ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_4" name="waste_safe_place_yes" onclick="no_4()">
							<label class="custom-control-label" for="check_4">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_40" name="waste_safe_place_no" >
							<label class="custom-control-label" for="check_40">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="waste_safe_place_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are pipe, beams, ledges, ducting and electric fittings clean  and from dust ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_5" name="pipe_beams_yes" onclick="no_5()">
							<label class="custom-control-label" for="check_5">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_50" name="pipe_beams_no" >
							<label class="custom-control-label" for="check_50">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="pipe_beams_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6. Are area in and around the building kept free from accumulated packaging materials and pallets ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_6" name="area_kept_free_yes" onclick="no_6()" >
							<label class="custom-control-label" for="check_6">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_60" name="area_kept_free_no" >
							<label class="custom-control-label" for="check_60">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="area_kept_free_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
					
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
					
					
			<div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Gas Cylinders</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are gas cylinders stored safely ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_7" name="are_gas_cyl_yes"  onclick="no_7()">
							<label class="custom-control-label" for="check_7">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_70" name="are_gas_cyl_no" >
							<label class="custom-control-label" for="check_70">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="are_gas_cyl_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are gas cylinders moved to a fenced compound outdoors when not in use ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_8" name="cyl_moved_yes" onclick="no_8()">
							<label class="custom-control-label" for="check_8">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_80" name="cyl_moved_no" >
							<label class="custom-control-label" for="check_80">No</label>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="cyl_moved_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are empty cylinders treated in the same mannaer, but kept separate and labeled empty ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_9" name="empty_cylinders_yes" onclick="no_9()">
							<label class="custom-control-label" for="check_9">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_90" name="empty_cylinders_yes_no" >
							<label class="custom-control-label" for="check_90">No</label>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="empty_cylinders_yes_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Are permanent warning notices prominently displayed prohibiting smoking and naked lights ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_1_" name="permanent_warning_notice_yes" onclick="no_10()">
							<label class="custom-control-label" for="check_1_">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_1_0" name="permanent_warning_notice_no" >
							<label class="custom-control-label" for="check_1_0">No</label>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="permanent_warning_notice_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are cylinders stored with their valves uppermost ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_11" name="cyl_valve_uppermost_yes" onclick="no_11()" >
							<label class="custom-control-label" for="check_11">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_110" name="cyl_valve_uppermost_no" >
							<label class="custom-control-label" for="check_110">No</label>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="cyl_valve_uppermost_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						

						
					
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
             <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Control of Flammable liquids</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are all stocks flammable liquids kept in purpose built flammable liquid stores ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_12" name="f_liquids_stores_yes" onclick="no_12()">
							<label class="custom-control-label" for="check_12">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_120" name="f_liquids_stores_no" >
							<label class="custom-control-label" for="check_120">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="f_liquids_stores_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Is the flammable liquid store kept uncongested and tidy ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_13" name="f_liquids_uncongested_yes" onclick="no_13()">
							<label class="custom-control-label" for="check_13">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_130" name="f_liquids_uncongested_no" >
							<label class="custom-control-label" for="check_130">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="f_liquids_uncongested_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are flammable liquids carried in specially designed containers and not in open cans or buckets ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_14" name="f_liquids_containers_yes" onclick="no_14()">
							<label class="custom-control-label" for="check_14">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_140" name="f_liquids_containers_no" >
							<label class="custom-control-label" for="check_140">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="f_liquids_containers_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Are quantities of flammable liquids in use kept to minimum ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_15" name="f_liquids_minimum_yes" onclick="no_15()">
							<label class="custom-control-label" for="check_15">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_150" name="f_liquids_minimum_no" >
							<label class="custom-control-label" for="check_150">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="f_liquids_minimum_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Are flammable liquids kept away from possible sources of ignition ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_16" name="f_liquids_away_yes" onclick="no_16()" >
							<label class="custom-control-label" for="check_16">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_160" name="f_liquids_away_no" >
							<label class="custom-control-label" for="check_160">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="f_liquids_away_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						

						
					
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
					
			   <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Smoking</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Is smoking prohibited in all but designated smoking areas ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_17" name="smoking_prohibited_yes" onclick="no_17()">
							<label class="custom-control-label" for="check_17">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_170" name="smoking_prohibited_no" >
							<label class="custom-control-label" for="check_170">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="smoking_prohibited_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Where smoking is permitted are there enough non-combustible receptac;es for cigarettes ends ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_18" name="smoking_permitted_yes" onclick="no_18()" >
							<label class="custom-control-label" for="check_18">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_180" name="smoking_permitted_no" >
							<label class="custom-control-label" for="check_180">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="smoking_permitted_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are these receptacles indentifiable from general waste ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_19" name="receptacles_yes" onclick="no_19()">
							<label class="custom-control-label" for="check_19">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_190" name="receptacles_no" >
							<label class="custom-control-label" for="check_190">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="receptacles_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
			
					
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
					
			   <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Electrical equipment</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are electrical cords and cables in good condition and not worn or frayed ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_20_" name="cables_not_worn_yes" onclick="no_20()">
							<label class="custom-control-label" for="check_20_">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_20_0" name="cables_not_worn_no" >
							<label class="custom-control-label" for="check_20_0">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="cables_not_worn_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Are electrical wall sockets in good condition and not cracked or damaged ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_21" name="sockets_good_yes" onclick="no_21()">
							<label class="custom-control-label" for="check_21">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_210" name="sockets_good_no" >
							<label class="custom-control-label" for="check_210">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="sockets_good_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are power points suitable loaded (not overloaded with too many plugs) ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_22" name="power_point_yes" onclick="no_22()">
							<label class="custom-control-label" for="check_22">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_220" name="power_point_no" >
							<label class="custom-control-label" for="check_220">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="power_point_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
			
					
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
					
				<div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Means of Escape</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are exit ways free of obstruction such as stored goods and rubbish? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_23" name="exit_obstruction_yes" onclick="no_23()">
							<label class="custom-control-label" for="check_23">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_230" name="exit_obstruction_no" >
							<label class="custom-control-label" for="check_230">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="exit_obstruction_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Do exits have correct and efficient signage ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_24" name="efficient_signage_yes" onclick="no_24()">
							<label class="custom-control-label" for="check_24">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_240" name="efficient_signage_no" >
							<label class="custom-control-label" for="check_240">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="efficient_signage_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Do exits doors open freely and easily ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_25" name="doors_open_freely_yes" onclick="no_25()" >
							<label class="custom-control-label" for="check_25">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_250" name="doors_open_freely_no" >
							<label class="custom-control-label" for="check_250">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="doors_open_freely_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Does the path from all exit doors lead to safety ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_26" name="path_exit_doors_yes" onclick="no_26()">
							<label class="custom-control-label" for="check_26">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_260" name="path_exit_doors_no" >
							<label class="custom-control-label" for="check_260">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="path_exit_doors_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
					<div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Fire Protection equipment</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. Are all extinquishers and hose reels within test date ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_27" name="extinquishers_test_yes" onclick="no_27()">
							<label class="custom-control-label" for="check_27">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_270" name="extinquishers_test_no" >
							<label class="custom-control-label" for="check_270">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="extinquishers_test_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Do all extinguishers have correct signage displayed ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_28" name="extinquishers_correct_yes" onclick="no_28()">
							<label class="custom-control-label" for="check_28">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_280" name="extinquishers_correct_no" >
							<label class="custom-control-label" for="check_280">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="extinquishers_correct_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3. Are all extinguishers and hose reels accessible (not blocked or covered by items) ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_29" name="extinquishers_accessible_yes" onclick="no_29()">
							<label class="custom-control-label" for="check_29">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_290" name="extinquishers_accessible_no" >
							<label class="custom-control-label" for="check_290">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="extinquishers_accessible_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4. Is there signage displayed to tell occupants what to do in the event of fire ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_30_" name="signage_displayed_yes" onclick="no_30()">
							<label class="custom-control-label" for="check_30_">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_300" name="signage_displayed_no" >
							<label class="custom-control-label" for="check_300">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="signage_displayed_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5. Is the EMAL emergency number displayed ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_31" name="emal_displayed_yes" onclick="no_31()">
							<label class="custom-control-label" for="check_31">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_310" name="emal_displayed_no" >
							<label class="custom-control-label" for="check_310">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="emal_displayed_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6. Are manual call points in good conition ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_32" name="manual_call_yes" onclick="no_32()">
							<label class="custom-control-label" for="check_32">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_320" name="manual_call_no" >
							<label class="custom-control-label" for="check_320">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="manual_call_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >7. Is the fire panel in good condition and showing normal ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_33" name="fire_panel_good_yes" onclick="no_33()">
							<label class="custom-control-label" for="check_33">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_330" name="fire_panel_good_no" >
							<label class="custom-control-label" for="check_330">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="fire_panel_good_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableR"><p><strong>Insert Additional Checks Below</strong></p></div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" > <input type="text" id="a_check_1" name="a_check_1" style="width: 80%;"><br><br></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_1" name="add_check_1_yes" onclick="deactivate_no_1()" >
							<label class="custom-control-label" for="add_check_1">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_10" name="add_check_1_no" >
							<label class="custom-control-label" for="add_check_10">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="a_check_1_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" > <input type="text" id="a_check_2" name="a_check_2" style="width: 80%;"><br><br></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_2" name="add_check_2_yes" onclick="deactivate_no_2()" >
							<label class="custom-control-label" for="add_check_2">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_20" name="add_check_2_no" >
							<label class="custom-control-label" for="add_check_20">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="a_check_2_com"></textarea>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" > <input type="text" id="a_check_3" name="a_check_3" style="width: 80%;"><br><br></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_3" name="add_check_3_yes" onclick="deactivate_no_3()" >
							<label class="custom-control-label" for="add_check_3">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_30" name="add_check_3_no" >
							<label class="custom-control-label" for="add_check_30">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="a_check_3_com"></textarea>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" > <input type="text" id="a_check_4" name="a_check_4" style="width: 80%;"><br><br></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_4" name="add_check_4_yes" onclick="deactivate_no_4()">
							<label class="custom-control-label" for="add_check_4">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_40" name="add_check_4_no" >
							<label class="custom-control-label" for="add_check_40">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="a_check_4_com"></textarea>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" > <input type="text" id="a_check_5" name="a_check_5" style="width: 80%;"><br><br></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_5" name="add_check_5_yes" onclick="deactivate_no_5()">
							<label class="custom-control-label" for="add_check_5">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="add_check_50" name="add_check_5_no" >
							<label class="custom-control-label" for="add_check_50">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="a_check_5_com"></textarea>
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
<script>

/***** Existing checks ***/
function no_1(){
	
 //Addtional checks 1
	if (document.getElementById("check_10").disabled == false)
	{
		document.getElementById("check_10").disabled = true;
	}
	else
	{
		document.getElementById("check_10").disabled = false;
	}
}

function no_2(){
	
 //Addtional checks 1
	if (document.getElementById("check_20").disabled == false)
	{
		document.getElementById("check_20").disabled = true;
	}
	else
	{
		document.getElementById("check_20").disabled = false;
	}
}

function no_3(){
	
 //Addtional checks 1
	if (document.getElementById("check_30").disabled == false)
	{
		document.getElementById("check_30").disabled = true;
	}
	else
	{
		document.getElementById("check_30").disabled = false;
	}
}

function no_4(){
	
 //Addtional checks 1
	if (document.getElementById("check_40").disabled == false)
	{
		document.getElementById("check_40").disabled = true;
	}
	else
	{
		document.getElementById("check_40").disabled = false;
	}
}

function no_5(){
	
 //Addtional checks 1
	if (document.getElementById("check_50").disabled == false)
	{
		document.getElementById("check_50").disabled = true;
	}
	else
	{
		document.getElementById("check_50").disabled = false;
	}
}

function no_6(){
	
 //Addtional checks 1
	if (document.getElementById("check_60").disabled == false)
	{
		document.getElementById("check_60").disabled = true;
	}
	else
	{
		document.getElementById("check_60").disabled = false;
	}
}


function no_7(){
	
 //Addtional checks 1
	if (document.getElementById("check_70").disabled == false)
	{
		document.getElementById("check_70").disabled = true;
	}
	else
	{
		document.getElementById("check_70").disabled = false;
	}
}

function no_8(){
	
 //Addtional checks 1
	if (document.getElementById("check_80").disabled == false)
	{
		document.getElementById("check_80").disabled = true;
	}
	else
	{
		document.getElementById("check_80").disabled = false;
	}
}

function no_9(){
	
 //Addtional checks 1
	if (document.getElementById("check_90").disabled == false)
	{
		document.getElementById("check_90").disabled = true;
	}
	else
	{
		document.getElementById("check_90").disabled = false;
	}
}


function no_10(){
	
 //Addtional checks 1
	if (document.getElementById("check_1_0").disabled == false)
	{
		document.getElementById("check_1_0").disabled = true;
	}
	else
	{
		document.getElementById("check_1_0").disabled = false;
	}
}


function no_11(){
	
 //Addtional checks 1
	if (document.getElementById("check_110").disabled == false)
	{
		document.getElementById("check_110").disabled = true;
	}
	else
	{
		document.getElementById("check_110").disabled = false;
	}
}

function no_12(){
	
 //Addtional checks 1
	if (document.getElementById("check_120").disabled == false)
	{
		document.getElementById("check_120").disabled = true;
	}
	else
	{
		document.getElementById("check_120").disabled = false;
	}
}

function no_13(){
	
 //Addtional checks 1
	if (document.getElementById("check_130").disabled == false)
	{
		document.getElementById("check_130").disabled = true;
	}
	else
	{
		document.getElementById("check_130").disabled = false;
	}
}


function no_14(){
	
 //Addtional checks 1
	if (document.getElementById("check_140").disabled == false)
	{
		document.getElementById("check_140").disabled = true;
	}
	else
	{
		document.getElementById("check_140").disabled = false;
	}
}


function no_15(){
	
 //Addtional checks 1
	if (document.getElementById("check_150").disabled == false)
	{
		document.getElementById("check_150").disabled = true;
	}
	else
	{
		document.getElementById("check_150").disabled = false;
	}
}

function no_16(){
	
 //Addtional checks 1
	if (document.getElementById("check_160").disabled == false)
	{
		document.getElementById("check_160").disabled = true;
	}
	else
	{
		document.getElementById("check_160").disabled = false;
	}
}

function no_17(){
	
 //Addtional checks 1
	if (document.getElementById("check_170").disabled == false)
	{
		document.getElementById("check_170").disabled = true;
	}
	else
	{
		document.getElementById("check_170").disabled = false;
	}
}

function no_18(){
	
 //Addtional checks 1
	if (document.getElementById("check_180").disabled == false)
	{
		document.getElementById("check_180").disabled = true;
	}
	else
	{
		document.getElementById("check_180").disabled = false;
	}
}


function no_19(){
	
 //Addtional checks 1
	if (document.getElementById("check_190").disabled == false)
	{
		document.getElementById("check_190").disabled = true;
	}
	else
	{
		document.getElementById("check_190").disabled = false;
	}
}


function no_20(){
	
 //Addtional checks 1
	if (document.getElementById("check_20_0").disabled == false)
	{
		document.getElementById("check_20_0").disabled = true;
	}
	else
	{
		document.getElementById("check_20_0").disabled = false;
	}
}


function no_21(){
	
 //Addtional checks 1
	if (document.getElementById("check_210").disabled == false)
	{
		document.getElementById("check_210").disabled = true;
	}
	else
	{
		document.getElementById("check_210").disabled = false;
	}
}


function no_22(){
	
 //Addtional checks 1
	if (document.getElementById("check_220").disabled == false)
	{
		document.getElementById("check_220").disabled = true;
	}
	else
	{
		document.getElementById("check_220").disabled = false;
	}
}


function no_23(){
	
 //Addtional checks 1
	if (document.getElementById("check_230").disabled == false)
	{
		document.getElementById("check_230").disabled = true;
	}
	else
	{
		document.getElementById("check_230").disabled = false;
	}
}

function no_24(){
	
 //Addtional checks 1
	if (document.getElementById("check_240").disabled == false)
	{
		document.getElementById("check_240").disabled = true;
	}
	else
	{
		document.getElementById("check_240").disabled = false;
	}
}

function no_25(){
	
 //Addtional checks 1
	if (document.getElementById("check_250").disabled == false)
	{
		document.getElementById("check_250").disabled = true;
	}
	else
	{
		document.getElementById("check_250").disabled = false;
	}
}

function no_26(){
	
 //Addtional checks 1
	if (document.getElementById("check_260").disabled == false)
	{
		document.getElementById("check_260").disabled = true;
	}
	else
	{
		document.getElementById("check_260").disabled = false;
	}
}


function no_27(){
	
 //Addtional checks 1
	if (document.getElementById("check_270").disabled == false)
	{
		document.getElementById("check_270").disabled = true;
	}
	else
	{
		document.getElementById("check_270").disabled = false;
	}
}


function no_28(){
	
 //Addtional checks 1
	if (document.getElementById("check_280").disabled == false)
	{
		document.getElementById("check_280").disabled = true;
	}
	else
	{
		document.getElementById("check_280").disabled = false;
	}
}

function no_29(){
	
 //Addtional checks 1
	if (document.getElementById("check_290").disabled == false)
	{
		document.getElementById("check_290").disabled = true;
	}
	else
	{
		document.getElementById("check_290").disabled = false;
	}
}

function no_30(){
	
 //Addtional checks 1
	if (document.getElementById("check_300").disabled == false)
	{
		document.getElementById("check_300").disabled = true;
	}
	else
	{
		document.getElementById("check_300").disabled = false;
	}
}

function no_31(){
	
 //Addtional checks 1
	if (document.getElementById("check_310").disabled == false)
	{
		document.getElementById("check_310").disabled = true;
	}
	else
	{
		document.getElementById("check_310").disabled = false;
	}
}

function no_32(){
	
 //Addtional checks 1
	if (document.getElementById("check_320").disabled == false)
	{
		document.getElementById("check_320").disabled = true;
	}
	else
	{
		document.getElementById("check_320").disabled = false;
	}
}

function no_33(){
	
 //Addtional checks 1
	if (document.getElementById("check_330").disabled == false)
	{
		document.getElementById("check_330").disabled = true;
	}
	else
	{
		document.getElementById("check_330").disabled = false;
	}
}


/***** Aditional checks ***/
function deactivate_no_1(){
	
 //Addtional checks 1
	if (document.getElementById("add_check_10").disabled == false)
	{
		document.getElementById("add_check_10").disabled = true;
	}
	else
	{
		document.getElementById("add_check_10").disabled = false;
	}
}

function deactivate_no_2(){
	  //Addtional checks 2
	if (document.getElementById("add_check_20").disabled == false)
	{
		document.getElementById("add_check_20").disabled = true;
	}
	else
	{
		document.getElementById("add_check_20").disabled = false;
	}
}

function deactivate_no_3(){
	  //Addtional checks 3
	if (document.getElementById("add_check_30").disabled == false)
	{
		document.getElementById("add_check_30").disabled = true;
	}
	else
	{
		document.getElementById("add_check_30").disabled = false;
	}
}
function deactivate_no_4(){
	  //Addtional checks 4
	if (document.getElementById("add_check_40").disabled == false)
	{
		document.getElementById("add_check_40").disabled = true;
	}
	else
	{
		document.getElementById("add_check_40").disabled = false;
	}
}

function deactivate_no_5(){
	  //Addtional checks 5
	if (document.getElementById("add_check_50").disabled == false)
	{
		document.getElementById("add_check_50").disabled = true;
	}
	else
	{
		document.getElementById("add_check_50").disabled = false;
	}
}



</script>
  </body>
</html>