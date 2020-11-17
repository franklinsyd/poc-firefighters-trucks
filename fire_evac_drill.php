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
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">FIRE DRILL EVACUATION REPORT </a>
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
          
		  <form method="POST" action ="core/process_fire_drill_evac_report.php" onsubmit="return confirm('Are you sure everything is correct?');">
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
						<th class="tg-cly1"><input type="date" name="check_date" class="form_datetime"></th>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Time</span>: </td>
						<td class="tg-cly1"><input type="time" name="check_time" class="form_datetime"></td>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Area: </span></td>
						<td class="tg-cly1"><textarea rows="2" cols="20" name="building_name"></textarea> </td>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Occupancy:</span> </td>
						<td class="tg-cly1"><input type="textbox" name="building_number" ></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Evacuation Observer:</span><br></td>
						<td class="tg-0lax"><input type="textbox" name="evacuation_observer" ></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><br><span style="font-weight:bold">Time taken to complete evacuation</span><br></td>
						<td class="tg-0lax"><input type="textbox" name="time_taken" ></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><br><span style="font-weight:bold">Evacuation Type</span></td>
						<td class="tg-0lax">Emergency <input type="checkbox" name="evacuation_type_emergency" >
						                    Planned   <input type="checkbox" name="evacuation_type_planned" ></td>
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
						<div class="divTableHead">Checks</div>
						<div class="divTableHead">Yes</div>
						<div class="divTableHead">No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. OIC notified security control before evacuation ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_1" name="oic_notified_yes" onclick="no_1()" >
							<label class="custom-control-label" for="check_1">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_10" name="oic_notified_no" >
							<label class="custom-control-label" for="check_10">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="oic_notified_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Did all occupant evacuate safely, expeditiously and efficiently ? </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_2" name="all_occupant_yes" onclick="no_2()" >
							<label class="custom-control-label" for="check_2">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_20" name="all_occupant_no" >
							<label class="custom-control-label" for="check_20">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="all_occupant_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3.   Could the alarm be heard in all areas ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_3" name="alarm_yes" onclick="no_3()" >
							<label class="custom-control-label" for="check_3">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_30" name="alarm_no" >
							<label class="custom-control-label" for="check_30">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="alarm_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4.   Were all smoke and Fire Control Doors closed ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_4" name="smoke_fire_yes" onclick="no_4()">
							<label class="custom-control-label" for="check_4">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_40" name="smoke_fire_no" >
							<label class="custom-control-label" for="check_40">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="smoke_fire_com"></textarea>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5.   Were all Wardens and Staff members familiar with Procedure ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_5" name="wardens_staff_yes" onclick="no_5()" >
							<label class="custom-control-label" for="check_5">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_50" name="wardens_staff_no" >
							<label class="custom-control-label" for="check_50">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="wardens_staff_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6.   Did all Wardens wear Identification ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_6" name="wardens_id_yes" onclick="no_6()">
							<label class="custom-control-label" for="check_6">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_60" name="wardens_id_yes" >
							<label class="custom-control-label" for="check_60">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="wardens_id_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >7.   Was the correct assembly area used ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_7" name="assembly_area_yes" onclick="no_7()">
							<label class="custom-control-label" for="check_7">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_70" name="assembly_area_no" >
							<label class="custom-control-label" for="check_70">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="assembly_area_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >8.   Are adequate Evacuation and Fire Procedure Notices in Place ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_8" name="adequate_evacuation_yes" onclick="no_8()">
							<label class="custom-control-label" for="check_8">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_80" name="adequate_evacuation_no" >
							<label class="custom-control-label" for="check_80">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="adequate_evacuation_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >9.   Are all Exit ways clear and all doors able to open ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_9" name="exit_ways_yes" onclick="no_9()" >
							<label class="custom-control-label" for="check_9">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_90" name="exit_ways_no" >
							<label class="custom-control-label" for="check_90">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="exit_ways_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >10.  Has Firefighting equipement been serviced in the last 6 months ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_10_" name="firefightinge_equip_yes"  onclick="no_10()">
							<label class="custom-control-label" for="check_10_">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_100" name="firefightinge_equip_no" >
							<label class="custom-control-label" for="check_100">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="firefightinge_equip_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >11.  Did the person responsible know how to make a call to the ERT using 2111 ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_11" name="person_responsible_yes" onclick="no_11()">
							<label class="custom-control-label" for="check_11">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_110" name="person_responsible_no" >
							<label class="custom-control-label" for="check_110">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="person_responsible_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >12.  Have all Wardens attended Fire Warden Training ?      </div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_12" name="warden_training_yes"  onclick="no_12()">
							<label class="custom-control-label" for="check_12">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_120" name="warden_training_no" >
							<label class="custom-control-label" for="check_120">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="warden_training_com"></textarea> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p>13.  Evacuation Successful ? </p></div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_13" name="evacuation_successful_yes" onclick="no_13()">
							<label class="custom-control-label" for="check_13">Yes</label>
						</div>
						<div class="divTableCell">
							<input type="checkbox" class="custom-control-input" id="check_130" name="evacuation_successful_no" >
							<label class="custom-control-label" for="check_130">No</label>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<textarea rows="1" cols="20" name="evacuation_successful_com"></textarea> 
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
	
	if (document.getElementById("check_100").disabled == false)
	{
		document.getElementById("check_100").disabled = true;
	}
	else
	{
		document.getElementById("check_100").disabled = false;
	}
}


function no_11(){
	
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
	
	if (document.getElementById("check_130").disabled == false)
	{
		document.getElementById("check_130").disabled = true;
	}
	else
	{
		document.getElementById("check_130").disabled = false;
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

</script>

  </body>
</html>