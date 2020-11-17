<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RISK ASSESSMENT</title>
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
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">RISK ASSESSMENT </a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted "><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
			  <li class="sidebar-list-item"><a href="risk_assess.php"class="sidebar-link active"><i class="o-survey-1 mr-3 text-gray"></i><span>Risk Assessment</span></a></li>
			  <li class="sidebar-list-item"><a href="add_user.php"class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Register</span></a></li>

        </ul>
  
      </div>
      <div class="page-holder w-100 d-flex flex-wrap ">
        <div class="container-fluid px-xl-5">
          
		  <form method="POST" action ="core/process_risk_assess.php" onsubmit="return confirm('Are you sure everything is correct?');">
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
              
                <div class="card mb-5 mb-lg-0" style="width: 80%;">
                <div class="card-body">
                  <div>
    				<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
					.tg .tg-cly1{text-align:left;vertical-align:middle}
					.tg .tg-0lax{text-align:left;vertical-align:top}
					</style>
					<table class="tg" style="undefined;table-layout: fixed; width: 70%">
					<colgroup>
					<col style="width: 153px">
					<col style="width: 174px">
					</colgroup>
					 <tr>
						<td class="tg-0lax"><br><span style="font-weight:bold">Risk Assessment Type</span></td>
						<td class="tg-0lax">New <input type="checkbox" name="new_risk_assess" >
						                    Review   <input type="checkbox" name="review_risk_assess" ></td>
					  </tr>
					  <tr>
						<th class="tg-cly1"><span style="font-weight:bold">Date of Issue</span>: </th>
						<th class="tg-cly1"><input type="date" name="date_of_issue" class="form_datetime" class="form-control"></th>
					  </tr>
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Company</span> </td>
						<td class="tg-cly1"><input type="textbox" name="company" class="form-control"></td>
					  </tr>
					 
					  
					  <tr>
						<td class="tg-cly1"><span style="font-weight:bold">Division / Department</span> </td>
						<td class="tg-cly1"><input type="textbox" name="division_department" class="form-control"></td>
					  </tr>
					 
					  
					   

					</table>
					
					</br>
					
					<table class="table" style="undefined;table-layout: fixed; width: 70%">
					
					<tr>
						<td class="tg-cly1"><span style="font-weight:bold">Describe Activity and Location</span></td>
						<td class="tg-cly1"><textarea rows="2" cols="20" name="describe_activity"></textarea> </td>
						<td class="tg-cly1"></td>
					  </tr>
					  
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Prepared By</span><br></td>
						<td class="tg-0lax">Name <input type="textbox" name="prepared_by_name" class="form-control"></td>
						<td class="tg-0lax">Designation  <input type="textbox" name="prepared_by_des" class="form-control"></td>
					  </tr>
					  
					  <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Approved By</span><br></td>
						<td class="tg-0lax">Name <input type="textbox" name="approved_by_name" class="form-control"></td>
						<td class="tg-0lax">Designation  <input type="textbox" name="approved_by_des" class="form-control"></td>
					  </tr>
					  
					
					</table>
					
					</br>
					
					<table class="table" style="undefined;table-layout: fixed; width: 70%">
				
					   <tr>
						<td class="tg-0lax"><span style="font-weight:bold">Department Approval</span><br></td>
						<td class="tg-0lax">Name <input type="textbox" name="dpt_approval_name" class="form-control"></td>
						<td class="tg-0lax">Designation  <input type="textbox" name="dpt_approval_des" class="form-control" ></td>
					  </tr>
					</table>
				  </div>
				  </br>
                 <br>
				 
		
		     				 <table class="table" style="undefined;table-layout: fixed; width: 100%">
					<tr><h5>Entry 1</h5></tr>
					<tr>
						<th>S. No </th>
						<th>Hazard Title </th>
						<th>Hazard Details </th>
						<th>Causes </th>
						<th>Consequences </th>
						<th>Exisiting Legal Requirements </th>
					</tr>

					<tr>
					<td > <input type="textbox" name="s_no" class="form-control"> </td>
					<td > <input type="textbox" name="hazard_title" class="form-control" > </td>
					<td > <input type="textbox" name="hazard_details" class="form-control"> </td>
					<td > <input type="textbox" name="causes" class="form-control"> </td>
					<td > <input type="textbox" name="consequences" class="form-control"> </td>
					<td > <input type="textbox" name="legal_requirements" class="form-control"> </td>
					</tr>
					</table>
			<br>
              <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row" >
               <div class="left d-flex align-items-center">
			    <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Legal Compliance <br>(Fill with Y or N)</div>
						<div class="divTableHead">Risk Assessment <br>(Fill with Y or N)</div>
						<div class="divTableHead">Existing Controls</div>
						<div class="divTableHead">Additional Controls Proposed </div>
						<div class="divTableHead">Residual Risk Assessment <br>(Fill with Y or N)</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" >Y/N <input type="textbox" name="legal_compliance" style="width:15%"> </div>
						<div class="divTableCell"  >
						P <input type="textbox" name="risk_assess_p" style="width:10%">
						A <input type="textbox" name="risk_assess_a" style="width:10%">
						E <input type="textbox" name="risk_assess_e" style="width:10%">
						R <input type="textbox" name="risk_assess_r" style="width:10%">
						RI <input type="textbox" name="risk_assess_ri" style="width:10%">
						</div>
						<div class="divTableCell" ><input type="textbox" name="existing_controls" class="form-control"></div>
						<div class="divTableCell" ><input type="textbox" name="additional_controls"class="form-control" ></div>
						<div class="divTableCell"  >
						P <input type="textbox" name="res_risk_p" style="width:10%" >
						A <input type="textbox" name="res_risk_a" style="width:10%">
						E <input type="textbox" name="res_risk_e" style="width:10%">
						R <input type="textbox" name="res_risk_r" style="width:10%">
						RI <input type="textbox" name="res_risk_ri" style="width:10%">
						</div>
						
						
						</div>
						
						</div>
						<!--Ennd Table Row -->
						</div>
					  </div>
			          </div>  <!-- END TABLE -->
	         <?php  for ($x = 2; $x <= 5; $x++) { ?>
				 <table class="table" style="undefined;table-layout: fixed; width: 100%">
					<tr><h5>Entry: <?php echo $x;?></h5></tr>
					<tr>
						<th>S. No </th>
						<th>Hazard Title </th>
						<th>Hazard Details </th>
						<th>Causes </th>
						<th>Consequences </th>
						<th>Exisiting Legal Requirements </th>
					</tr>

					<tr>
					<td > <input type="textbox" name= <?php echo 's_no_'.$x;?> class="form-control"> </td>
					<td > <input type="textbox" name= <?php echo 'hazard_title_'.$x;?> class="form-control" > </td>
					<td > <input type="textbox" name= <?php echo 'hazard_details_'.$x;?>  class="form-control"> </td>
					<td > <input type="textbox" name= <?php echo 'causes_'.$x;?>  class="form-control"> </td>
					<td > <input type="textbox" name= <?php echo 'consequences_'.$x;?>  class="form-control"> </td>
					<td > <input type="textbox" name= <?php echo 'legal_requirements_'.$x;?> class="form-control"> </td>
					</tr>
					</table>
			<br>
              <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row" >
               <div class="left d-flex align-items-center">
			    <!-- TABLE -->
				   <div class="divTable cinereousTable">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">Legal Compliance <br>(Fill with Y or N)</div>
						<div class="divTableHead">Risk Assessment <br>(Fill with Y or N)</div>
						<div class="divTableHead">Existing Controls</div>
						<div class="divTableHead">Additional Controls Proposed </div>
						<div class="divTableHead">Residual Risk Assessment <br>(Fill with Y or N)</div>
						</div>
						</div>
						<div class="divTableBody">
						<!--Table Row -->
						<div class="divTableRow">
						<div class="divTableCell" >Y/N <input type="textbox" name="legal_compliance" style="width:15%"> </div>
						<div class="divTableCell"  >
						P <input type="textbox" name= <?php echo 'risk_assess_p_'.$x;?> style="width:10%">
						A <input type="textbox" name= <?php echo 'risk_assess_a_'.$x;?> style="width:10%">
						E <input type="textbox" name= <?php echo 'risk_assess_e_'.$x;?> style="width:10%">
						R <input type="textbox" name= <?php echo 'risk_assess_r_'.$x;?> style="width:10%">
						RI <input type="textbox" name= <?php echo 'risk_assess_ri_'.$x;?> style="width:10%">
						</div>
						<div class="divTableCell" ><input type="textbox" name="existing_controls" class="form-control"></div>
						<div class="divTableCell" ><input type="textbox" name="additional_controls"class="form-control" ></div>
						<div class="divTableCell"  >
						P <input type="textbox" name= <?php echo 'res_risk_p_'.$x;?> style="width:10%" >
						A <input type="textbox" name= <?php echo 'res_risk_a_'.$x;?>  style="width:10%">
						E <input type="textbox" name= <?php echo 'res_risk_e_'.$x;?>  style="width:10%">
						R <input type="textbox" name= <?php echo 'res_risk_r_'.$x;?>  style="width:10%">
						RI <input type="textbox" name=<?php echo 'res_risk_ri_'.$x;?>  style="width:10%">
						</div>
						
						
						</div>
						
						</div>
						<!--Ennd Table Row -->
						</div>
					  </div>
			          </div>  <!-- END TABLE -->
					 <?php }  ?>
					  <img src="img/matrix.png" alt="Risk Matrix" style="width:100%; margin:auto;">
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
             