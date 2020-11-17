<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Perform the checks and save them to DB

if(isset($_POST)){
	
	    if(isset($_POST["date_of_issue"])){
			$date_of_issue = $_POST["date_of_issue"];
		}
		
	    if(isset($_POST["user_id"])) {
			
			 $user_id = $_POST["user_id"];
			 //echo $user_id ;
			 
			 #Get Surname and Initials
			 
			 $q = "SELECT `surname`, `initials` FROM `user_table` WHERE `id_no` = $user_id";
			 
			 #Run the query
			 $query = $conn->query($q);
			 while($row = mysqli_fetch_array($query)){
				 $surname = $row['surname'];
				 $initials = $row['initials'];
			 }
		 }
		
		
		#Risk Assess Details
		
		if(empty($_POST["new_risk_assess"])){
			$new_risk_assess = 0; 
		}
		else {
			$new_risk_assess = 1; 
		}

		if(empty($_POST["review_risk_assess"])){
			$review_risk_assess = 0;
		}
		else {
			$review_risk_assess = 1;
		}

		if(isset($_POST["company"])){
			$company = $_POST["company"]; 
		}

		if(isset($_POST["division_department"])){
			$division_department= $_POST["division_department"]; 
		}

		if(isset($_POST["describe_activity"])){
			$describe_activity = $_POST["describe_activity"]; 
		}


		if(isset($_POST["prepared_by_name"])){
			$prepared_by_name = $_POST["prepared_by_name"]; 
		}

		if(isset($_POST["prepared_by_des"])){
			$prepared_by_des = $_POST["prepared_by_des"]; 
		}

		if(isset($_POST["approved_by_name"])){
			$approved_by_name = $_POST["approved_by_name"]; 
		}

		if(isset($_POST["approved_by_des"])){
			$approved_by_des = $_POST["approved_by_des"]; 
		}

		if(isset($_POST["dpt_approval_name"])){
			$dpt_approval_name = $_POST["dpt_approval_name"]; 
		}

		if(isset($_POST["dpt_approval_des"])){
			$dpt_approval_des = $_POST["dpt_approval_des"]; 
		}

		if(isset($_POST["s_no"])){
			$s_no = $_POST["s_no"]; 
		}

	
		 if(isset($_POST["hazard_title"])){
			$hazard_title = $_POST["hazard_title"]; 
		}

		 if(isset($_POST["hazard_details"])){
			$hazard_details = $_POST["hazard_details"]; 
		}

		if(isset($_POST["causes"])){
			$causes = $_POST["causes"]; 
		}

		if(isset($_POST["consequences"])){
			$consequences = $_POST["consequences"]; 
		}

		if(isset($_POST["legal_requirements"])){
			$legal_requirements = $_POST["legal_requirements"]; 
		}

		if(isset($_POST["legal_compliance"])){
			$legal_compliance = $_POST["legal_compliance"]; 
		}

		if(isset($_POST["risk_assess_p"])){
			$risk_assess_p = $_POST["risk_assess_p"]; 
		}

		if(isset($_POST["risk_assess_a"])){
			$risk_assess_a = $_POST["risk_assess_a"]; 
		}

		if(isset($_POST["risk_assess_e"])){
			$risk_assess_e = $_POST["risk_assess_e"]; 
		}

		if(isset($_POST["risk_assess_r"])){
			$risk_assess_r = $_POST["risk_assess_r"]; 
		}
		
		if(isset($_POST["risk_assess_ri"])){
			$risk_assess_ri = $_POST["risk_assess_ri"]; 		
		}

		if(isset($_POST["existing_controls"])){
			$existing_controls = $_POST["existing_controls"]; 
		}

		if(isset($_POST["additional_controls"])){
			$additional_controls = $_POST["additional_controls"]; 
		}

		if(isset($_POST["res_risk_p"])){
			$res_risk_p = $_POST["res_risk_p"]; 
		}

		if(isset($_POST["res_risk_a"])){
			$res_risk_a = $_POST["res_risk_a"]; 
		}

		if(isset($_POST["res_risk_e"])){
			$res_risk_e = $_POST["res_risk_e"]; 
		}

		if(isset($_POST["res_risk_r"])){
			$res_risk_r = $_POST["res_risk_r"]; 
		}

		if(isset($_POST["res_risk_ri"])){
			$res_risk_ri = $_POST["res_risk_ri"]; 
		}


		#Insert Data into the Database
		
		$big_q = "INSERT INTO `risk_assess_report` (`ID`, `id_no`, `surname`, `initials`, `new_risk_assess`, `review_risk_assess`, `date_of_issue`, `company`, `division_department`, `describe_activity`, `prepared_by_name`, `prepared_by_des`, `approved_by_name`, `approved_by_des`, `dpt_approval_name`, `dpt_approval_des`, `s_no`, `hazard_title`, `hazard_details`, `causes`, `consequences`, `legal_requirements`, `legal_compliance`, `risk_assess_p`, `risk_assess_a`, `risk_assess_e`, `risk_assess_r`, `risk_assess_ri`, `existing_controls`, `additional_controls`, `res_risk_p`, `res_risk_a`, `res_risk_e`, `res_risk_r`, `res_risk_ri`) 
				  VALUES (NULL, '$user_id', '$surname', '$initials', '$new_risk_assess', '$review_risk_assess', '$date_of_issue', '$company', '$division_department', '$describe_activity', '$prepared_by_name', '$prepared_by_des', '$approved_by_name', '$approved_by_des', '$dpt_approval_name', '$dpt_approval_des', '$s_no', '$hazard_title', '$hazard_details', '$causes', '$consequences', '$legal_requirements', '$legal_compliance', '$risk_assess_p', '$risk_assess_a', '$risk_assess_e', '$risk_assess_r', '$risk_assess_ri', '$existing_controls', '$additional_controls', '$res_risk_p', '$res_risk_a', '$res_risk_e', '$res_risk_r', '$res_risk_ri');" ;
	   
		#Run the query
	     $run_query = $conn->query($big_q);
		 
		 header("Location: /poc/thank_you.php");
		 
	  }


