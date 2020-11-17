<?php
//Establish DB Connection
#require_once("./core/db_conn.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/poc/core/db_conn.php';
$conn = OpenCon();
if(isset($_POST)){
	
	  if (isset($_POST["creation_ID"])){
		$creation_ID = $_POST["creation_ID"];
		}
		
                            
						  
		$select_individual_report = "SELECT * FROM `fire_drill_report` where ID ='$creation_ID'" ;
	    $query_2 = $conn->query($select_individual_report);
						  
		$date_time_1 ="";
		while($row = mysqli_fetch_array($query_2)) {
			$creation_ID = $row["ID"];
			$surname= $row['surname'];
			$initials= $row['initials'];
			$id = $row['id_no'];
		    $check_date = $row['check_date'];
			$check_time = $row['check_time'];
			$building_name = $row['building_name'];
			$building_number = $row['building_number'];
			$evacuation_observer = $row['evacuation_observer'];
			$time_taken = $row['time_taken'];
			$evacuation_type_emergency = $row['evacuation_type_emergency'];
			$evacuation_type_planned = $row['evacuation_type_planned'];
			
			#Question 1

			$oic_notified_yes = $row['oic_notified_yes'];
			$oic_notified_no = $row['oic_notified_no'];
			$oic_notified_com = $row['oic_notified_com'];
			#Question 2

			$all_occupant_yes = $row['all_occupant_yes'];
			$all_occupant_no  = $row['all_occupant_no'];
			$all_occupant_com  = $row['all_occupant_com'];

			#Question 3
			$alarm_yes = $row['alarm_yes'];
			$alarm_no  = $row['alarm_no'];
			$alarm_com   = $row['alarm_com'];


			#Question 4

			$smoke_fire_yes = $row['smoke_fire_yes'];
			$smoke_fire_no  = $row['smoke_fire_no'];
			$smoke_fire_com = $row['smoke_fire_com'];


			#Question 5
			$wardens_staff_yes = $row['wardens_staff_yes'];
			$wardens_staff_no = $row['wardens_staff_no'];
			$wardens_staff_com = $row['wardens_staff_com'];

			#Question 6
			$wardens_id_yes = $row['wardens_id_yes'];
			$wardens_id_no = $row['wardens_id_no'];
			$wardens_id_com = $row['wardens_id_com'];

			#Question 7
			$assembly_area_yes  = $row['assembly_area_yes'];
			$assembly_area_no = $row['assembly_area_no'];
			$assembly_area_com = $row['assembly_area_com'];

			#Question 8
			$adequate_evacuation_yes = $row['adequate_evacuation_yes'];
			$adequate_evacuation_no = $row['adequate_evacuation_no'];
			$adequate_evacuation_com = $row['adequate_evacuation_com'];

			#Question 9
			$exit_ways_yes = $row['exit_ways_yes'];
			$exit_ways_no = $row['exit_ways_no'];
			$exit_ways_com = $row['exit_ways_com'];

			#Question 10

			$firefightinge_equip_yes = $row['firefightinge_equip_yes'];
			$firefightinge_equip_no = $row['firefightinge_equip_no'];
			$firefightinge_equip_com = $row['firefightinge_equip_com'];

			#Question 11

			$person_responsible_yes = $row['person_responsible_yes'];
			$person_responsible_no = $row['person_responsible_no'];
			$person_responsible_com = $row['person_responsible_com'];

			#Question 12

			$warden_training_yes = $row['warden_training_yes'];
			$warden_training_no = $row['warden_training_no'];
			$warden_training_com = $row['warden_training_com'];

			#Question 13

			$evacuation_successful_yes = $row['evacuation_successful_yes'];
			$evacuation_successful_no = $row['evacuation_successful_no'];
			$evacuation_successful_com  = $row['evacuation_successful_com'];
			
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
   <h3>Fire Dril Evacuation Report</h3>
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
						<td class="tg-cly1"><span style="font-weight:bold">Time</span>: </td>
						<td class="tg-cly1"><h5><?php echo $check_time; ?></h5></td>
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
						<td class="tg-0lax"><span style="font-weight:bold">Evacuation Observer:</span><br></td>
						<td class="tg-0lax"><h5><?php echo $evacuation_observer; ?></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><br><span style="font-weight:bold">Time taken to complete evacuation</span><br></td>
						<td class="tg-0lax"><h5><?php echo $time_taken; ?></h5></td>
					  </tr>
					  <tr>
						<td class="tg-0lax"><br><span style="font-weight:bold">Evacuation Type</span></td>
						<td class="tg-0lax"><h5><?php if($evacuation_type_emergency == 1){ echo "Emergency";}
									                  if($evacuation_type_planned == 1){ echo "Planned";}
							                   ?></h5></td>
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
						<div class="divTableHead">Yes/No</div>
						<div class="divTableHead">Comments</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >1. OIC notified security control before evacuation ? </div>
						<div class="divTableCell">
							<h5><?php if($oic_notified_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $oic_notified_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >2. Did all occupant evacuate safely, expeditiously and efficiently ? </div>
						<div class="divTableCell">
							<h5><?php if($all_occupant_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $all_occupant_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >3.   Could the alarm be heard in all areas ?      </div>
						<div class="divTableCell">
							<h5><?php if($alarm_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
					
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $alarm_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >4.   Were all smoke and Fire Control Doors closed ?      </div>
						<div class="divTableCell">
							<h5><?php if($smoke_fire_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $smoke_fire_com; ?></h5>
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >5.   Were all Wardens and Staff members familiar with Procedure ?      </div>
						<div class="divTableCell">
							<h5><?php if($wardens_staff_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $wardens_staff_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >6.   Did all Wardens wear Identification ?      </div>
						<div class="divTableCell">
							<h5><?php if($wardens_id_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $wardens_id_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >7.   Was the correct assembly area used ?      </div>
						<div class="divTableCell">
							<h5><?php if($assembly_area_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $assembly_area_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >8.   Are adequate Evacuation and Fire Procedure Notices in Place ?      </div>
						<div class="divTableCell">
							<h5><?php if($adequate_evacuation_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $adequate_evacuation_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >9.   Are all Exit ways clear and all doors able to open ?      </div>
						<div class="divTableCell">
	
							<h5><?php if($exit_ways_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $exit_ways_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >10.  Has Firefighting equipement been serviced in the last 6 months ?      </div>
						<div class="divTableCell">
							
							<h5><?php if($firefightinge_equip_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $firefightinge_equip_com; ?></h5> 
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >11.  Did the person responsible know how to make a call to the ERT using 2111 ?      </div>
						<div class="divTableCell">
							<h5><?php if($person_responsible_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $person_responsible_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" >12.  Have all Wardens attended Fire Warden Training ?      </div>
						<div class="divTableCell">
							<h5><?php if($warden_training_yes == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $warden_training_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" style="width: 40%;" ><p>13.  Evacuation Successful ? </p></div>
						<div class="divTableCell">
							<h5><?php if($evacuation_successful_yes  == 1){ 
							               echo "YES";}
							          else {echo "NO";}
							 ?></h5>
						</div>
						
						
						<div class="divTableCell" style="padding-bottom: 30px;">
							<h5><?php echo $evacuation_successful_com; ?></h5>  
						</div>
						</div>
						<!--Ennd Table Row -->
						
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
						</div>
					  </div>
			     <!-- END TABLE -->
                      </div>
                    </div>
             
			   </div>
              </div>
            </div>
        </div>

  
  
</body>

