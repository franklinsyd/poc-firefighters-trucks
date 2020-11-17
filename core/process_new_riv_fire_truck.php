<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Perform the checks and save them to DB

if(isset($_POST)){
	
	    if(isset($_POST["check_date"])){
			$check_date = $_POST["check_date"];
			//echo $check_date;
		}
		
		if(isset($_POST["mode"]))
		{
			$mode_1 = $_POST["mode"];
			//echo "</br>";
			
			if ($mode_1 =="Day")
			{
				$mode = 1;
			}
			else
			{
				$mode = 0;
			}
			//echo $mode;
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
				 #echo $surname;
				 #echo $initials;
				 
			 }
			 
		 }
		 
		 if(isset($_POST["truck_registration"])) {
			 $brand_registration = $_POST["truck_registration"];
			 #echo $brand_registration;
		 }
		 
		#Locker 1
		#$brand = "";
		if(isset($_POST["locker_1_name"])) {
			$locker_1_name = $_POST["locker_1_name"];
		}
		
		if(isset($_POST["l1_item_1_name"])) {
			$l1_item_1_name = $_POST["l1_item_1_name"];
		}
		
		if(isset($_POST["l1_item_2_name"])) {
			$l1_item_2_name = $_POST["l1_item_2_name"];
		}
		
		if(isset($_POST["l1_item_3_name"])) {
			$l1_item_3_name = $_POST["l1_item_3_name"];
		}
		
		if(isset($_POST["l1_item_4_name"])) {
			$l1_item_4_name = $_POST["l1_item_4_name"];
		}
		
		if(isset($_POST["l1_item_5_name"])) {
			$l1_item_5_name = $_POST["l1_item_5_name"];
		}
	
		if(isset($_POST["l1_item_6_name"])) {
			$l1_item_6_name = $_POST["l1_item_6_name"];
		}
		
		if(isset($_POST["l1_item_7_name"])) {
			$l1_item_7_name = $_POST["l1_item_7_name"];
		}
		
		if(isset($_POST["l1_item_8_name"])) {
			$l1_item_8_name = $_POST["l1_item_8_name"];
		}
		
		if(isset($_POST["l1_item_9_name"])) {
			$l1_item_9_name = $_POST["l1_item_9_name"];
		}
		
		if(isset($_POST["l1_item_10_name"])) {
			$l1_item_10_name = $_POST["l1_item_10_name"];
		}
		
		
		if(isset($_POST["l1_q1_name"])) {
			$l1_q1_name = $_POST["l1_q1_name"];
		}
		
		if(isset($_POST["l1_q2_name"])) {
			$l1_q2_name = $_POST["l1_q2_name"];
		}
		
		if(isset($_POST["l1_q3_name"])) {
			$l1_q3_name = $_POST["l1_q3_name"];
		}
		
		if(isset($_POST["l1_q4_name"])) {
			$l1_q4_name = $_POST["l1_q4_name"];
		}
		
		if(isset($_POST["l1_q5_name"])) {
			$l1_q5_name = $_POST["l1_q5_name"];
		}
		
		if(isset($_POST["l1_q6_name"])) {
			$l1_q6_name = $_POST["l1_q6_name"];
		}
		
		if(isset($_POST["l1_q7_name"])) {
			$l1_q7_name = $_POST["l1_q7_name"];
		}
		
		if(isset($_POST["l1_q8_name"])) {
			$l1_q8_name = $_POST["l1_q8_name"];
		}
		
		if(isset($_POST["l1_q9_name"])) {
			$l1_q9_name = $_POST["l1_q9_name"];
		}
		
		if(isset($_POST["l1_q10_name"])) {
			$l1_q10_name = $_POST["l1_q10_name"];
		}
		
		

		if( empty($_POST["l1_check_1_name"]))
		{ 
	      	$l1_check_1_name = 0;
      	}
		else{
			$l1_check_1_name = 1;
		}
		
		if( empty($_POST["l1_check_2_name"]))
		{ 
	      	$l1_check_2_name = 0;
      	}
		else{
			$l1_check_2_name = 1;
		}
		
		if( empty($_POST["l1_check_3_name"]))
		{ 
	      	$l1_check_3_name = 0;
      	}
		else{
			$l1_check_3_name = 1;
		}
		
		if( empty($_POST["l1_check_4_name"]))
		{ 
	      	$l1_check_4_name = 0;
      	}
		else{
			$l1_check_4_name = 1;
		}
		
		if( empty($_POST["l1_check_5_name"]))
		{ 
	      	$l1_check_5_name = 0;
      	}
		else{
			$l1_check_5_name = 1;
		}
		
		if( empty($_POST["l1_check_6_name"]))
		{ 
	      	$l1_check_6_name = 0;
      	}
		else{
			$l1_check_6_name = 1;
		}
		
		if( empty($_POST["l1_check_7_name"]))
		{ 
	      	$l1_check_7_name = 0;
      	}
		else{
			$l1_check_7_name = 1;
		}
		
		if( empty($_POST["l1_check_8_name"]))
		{ 
	      	$l1_check_8_name = 0;
      	}
		else{
			$l1_check_8_name = 1;
		}
		
		if( empty($_POST["l1_check_9_name"]))
		{ 
	      	$l1_check_9_name = 0;
      	}
		else{
			$l1_check_9_name = 1;
		}
		
		if( empty($_POST["l1_check_10_name"]))
		{ 
	      	$l1_check_10_name = 0;
      	}
		else{
			$l1_check_10_name = 1;
		}
		

		
	   
		$big_q = "INSERT INTO `new_fire_truck` (`ID`, `id_no`, `mode`, `date_time`, `surname`, `initials`, `truck_registration`, `truck_brand`, `locker_1_name`, `l1_item_1_name`, `l1_item_2_name`, `l1_item_3_name`, `l1_item_4_name`, `l1_item_5_name`, `l1_item_6_name`, `l1_item_7_name`, `l1_item_8_name`, `l1_item_9_name`, `l1_item_10_name`, `l1_q1_name`, `l1_q2_name`, `l1_q3_name`, `l1_q4_name`, `l1_q5_name`, `l1_q6_name`, `l1_q7_name`, `l1_q8_name`, `l1_q9_name`, `l1_q10_name`, `l1_check_1_name`, `l1_check_2_name`, `l1_check_3_name`, `l1_check_4_name`, `l1_check_5_name`, `l1_check_6_name`, `l1_check_7_name`, `l1_check_8_name`, `l1_check_9_name`, `l1_check_10_name`)
				  VALUES (NULL, '$user_id', '$mode', '2019-08-05 00:00:00', '$surname', '$initials', '$truck_registration', '$brand_registration', '$locker_1_name', '$l1_item_1_name', '$l1_item_2_name', '$l1_item_3_name', '$l1_item_4_name', '$l1_item_5_name', '$l1_item_6_name', '$l1_item_7_name', '$l1_item_8_name', '$l1_item_9_name', '$l1_item_10_name', '$l1_q1_name', '$l1_q2_name', '$l1_q3_name', '$l1_q4_name', '$l1_q5_name', '$l1_q6_name', '$l1_q7_name', '$l1_q8_name', '$l1_q9_name', '$l1_q10_name', '$l1_check_1_name', '$l1_check_2_name', '$l1_check_3_name', '$l1_check_4_name', '$l1_check_5_name', '$l1_check_6_name', '$l1_check_7_name', '$l1_check_8_name', '$l1_check_9_name', '$l1_check_10_name');";
		#Run the query
	    $run_query = $conn->query($big_q);
		 
		header("Location: /poc/thank_you.php");
		 
	  }


