<?php

//Establish DB Connection
#require_once("./core/db_conn.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/poc/core/db_conn.php';
$conn = OpenCon();
if(isset($_POST)){

	if (isset($_POST["creation_ID"])){
		$creation_ID = $_POST["creation_ID"];
		}
						  
		$select_individual_report = "SELECT * FROM `risk_assess_report` where ID ='$creation_ID'" ;
		$query_2 = $conn->query($select_individual_report);
		

		while($row = mysqli_fetch_array($query_2)) {
			$creation_ID = $row["ID"];
			$surname= $row['surname'];
			$initials= $row['initials'];
			$id_no = $row['id_no'];

			$new_risk_assess = $row['new_risk_assess'];
			$review_risk_assess  = $row['review_risk_assess'];

			$date_of_issue  = $row['date_of_issue'];
			$company  = $row['company'];
			$division_department   = $row['division_department'];

			$describe_activity  = $row['describe_activity'];
			$prepared_by_name  = $row['prepared_by_name'];
			$prepared_by_des  = $row['prepared_by_des'];

			$approved_by_name  = $row['approved_by_name'];
			$approved_by_des  = $row['approved_by_des'];

			$dpt_approval_name  = $row['dpt_approval_name'];
			$dpt_approval_des  = $row['dpt_approval_des'];

			$s_no  = $row['s_no'];
			$hazard_title  = $row['hazard_title'];
			$hazard_details  = $row['hazard_details'];
			$causes   = $row['causes'];
			$consequences  = $row['consequences'];
			$legal_requirements  = $row['legal_requirements'];
			$legal_compliance = $row['legal_compliance'];

			$risk_assess_p  = $row['risk_assess_p'];
			$risk_assess_a  = $row['risk_assess_a'];
			$risk_assess_e  = $row['risk_assess_e'];
			$risk_assess_r  = $row['risk_assess_r'];
			$risk_assess_ri  = $row['risk_assess_ri'];

			$existing_controls  = $row['existing_controls'];
			$additional_controls  = $row['additional_controls'];


			$res_risk_p  = $row['res_risk_p'];
			$res_risk_a  = $row['res_risk_a'];
			$res_risk_e  = $row['res_risk_e'];
			$res_risk_r  = $row['res_risk_r'];
			$res_risk_ri = $row['res_risk_ri'];

		}

}

?>

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
   <h3>Risk Asessment Report</h3>
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
      <td><?php echo $id_no; ?></td>
     </tr>
   </tbody>
	 </table>
   </br>

   <div class="card-body" style="width:60%; margin:auto;">
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
						<td class="tg-0lax"><br><span style="font-weight:bold">Risk Assessment Type</span></td>
						<td class="tg-0lax">

						 <?php 
						 
						 if($new_risk_assess == 0){

							echo "REVIEW";

						 }
						 else{
							echo "NEW";
						 } 
						 
						 
						 ?>
					    
						
						</td>
					  </tr>
					  <tr>
						<th class="tg-cly1"><span style="font-weight:bold">Date of Issue</span>: </th>
						<th class="tg-cly1"><?php echo date_format(date_create($date_of_issue),"Y-m-d"); ?></th>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Company</span> </td>
						<td class="tg-cly1"><?php echo $company; ?></td>
					  </tr>
					 
					  
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Division / Department</span> </td>
						<td class="tg-cly1"><?php echo $division_department; ?></td>
					  </tr>
					 
					  
					   

					</table>
					
					</br>
					
					<table class="tg" style="undefined;table-layout: fixed; width: 55%">
					
					<tr>
						<td class="tg-cly1"><span style="font-weight:bold">Describe Activity and Location</span></td>
						<td class="tg-cly1"><?php echo $describe_activity;  ?> </td>
						<td class="tg-cly1"></td>
					  </tr>
					  
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Prepared By</span><br></td>
						<td class="tg-0lax"><strong>Name: </strong><?php echo $prepared_by_name; ?></td>
						<td class="tg-0lax"><strong>Designation: </strong><?php echo $prepared_by_des; ?></td>
					  </tr>
					  
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Approved By</span><br></td>
						<td class="tg-0lax"><strong>Name: </strong> <?php echo $approved_by_name; ?></td>
						<td class="tg-0lax"><strong>Designation: </strong> <?php echo $approved_by_des; ?></td>
					  </tr>
					  
					
					</table>
					
					</br>
					
					<table class="tg" style="undefined;table-layout: fixed; width: 55%">
					
					   <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Department Approval</span><br></td>
						<td class="tg-0lax"><strong>Name: </strong> <?php echo $dpt_approval_name; ?></td>
						<td class="tg-0lax"><strong>Designation: </strong> <?php echo $dpt_approval_des; ?></td>
					  </tr>
					</table>
					
					
				  </div>
				  </br>
                 <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row" style="width: 80%;">
                  <div class="left d-flex align-items-center">
			   <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">S. No</div>
						<div class="divTableHead">Hazard Title</div>
						<div class="divTableHead">Hazard Details</div>
						<div class="divTableHead">Causes</div>
						<div class="divTableHead">Consequences</div>
						<div class="divTableHead">Exisiting Legal Requirements</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" ><?php echo $s_no; ?></div>
						<div class="divTableCell" ><?php echo $hazard_title; ?></div>
						<div class="divTableCell" ><?php echo $hazard_details; ?></div>
						<div class="divTableCell" ><?php echo $causes; ?></div>
						<div class="divTableCell" ><?php echo $consequences; ?></div>
						<div class="divTableCell" ><?php echo $legal_requirements; ?></div>
						
						
						</div>
						<!--Ennd Table Row -->
						</div>
					  </div>
			     <!-- END TABLE -->
				  </br>
				
                      </div>
                    </div>

			              <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row" style="width: 89%;">
               <div class="left d-flex align-items-center">
			    <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Legal Compliance</div>
						<div class="divTableHead">Risk Assessment</div>
						<div class="divTableHead">Existing Controls</div>
						<div class="divTableHead">Additional Controls Proposed</div>
						<div class="divTableHead">Residual Risk Assessment</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<?php

						$val ="";
						if ($legal_compliance == "Y" || $legal_compliance == "y")
						{
							$val = 'YES';
						}
						else
						{
							$val = 'NO';
						}

						?>
						<div class="divTableCell" name ='legal_compliance' > <?php echo $val ; ?> </div>
						<div class="divTableCell" style="width:28%" >
						P <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $risk_assess_p; ?> disabled> 
						A <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $risk_assess_a; ?> disabled> 
						E <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $risk_assess_e; ?> disabled> 
						R <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $risk_assess_r; ?> disabled> 
						RI <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $risk_assess_ri; ?> disabled>
						
						</div>
						<div class="divTableCell" ><?php echo $existing_controls; ?></div>
						<div class="divTableCell" ><?php echo $additional_controls; ?></div>
						<div class="divTableCell" style="width:28%" >
						P <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $res_risk_p; ?> disabled> 
						A <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $res_risk_a; ?> disabled> 
						E <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $res_risk_e; ?> disabled> 
						R <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $res_risk_r; ?> disabled> 
						RI <input type="textbox" name="res_risk_p" style="width:10%" value = <?php echo $res_risk_ri; ?> disabled> 
						</div>
						
						
						</div>
						
						</div>
						<!--Ennd Table Row -->
						</div>
					  </div>
			          </div>
					  </div>
			     <!-- END TABLE -->
			      
			    
			   </div>
              </div>
				
            </div>
        </div>
		</form>
		
		</section> 
		</div>
          
</body>
