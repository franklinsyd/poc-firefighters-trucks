<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Perform the checks and save them to DB

if(isset($_POST)){
	
	     if(isset($_POST["report_type"])){
			 
			 $report_type = $_POST["report_type"];
		 }
		 
		 if(isset($_POST["user_id"])){
			 
			 $user_id = $_POST["user_id"];
		 }
	     
		 if ($report_type == "New Riv Fire Truck"){
			#$qr =  "SELECT ";  
		 }
		 echo $user_id;
		
		
		#$run_query = $conn->query($qr);
		
		 
			
} //End Big IF

?>
