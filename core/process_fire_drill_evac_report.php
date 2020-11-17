<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Perform the checks and save them to DB

if(isset($_POST)){
	
	    #Dates - Time
		
	    if(isset($_POST["check_date"])){
			$check_date = $_POST["check_date"];
			 #echo $check_date;
		}
		
		if(isset($_POST["check_time"])){
			$check_time = $_POST["check_time"];
			 #echo $check_time;
		}
		
		#Get User Data
		if(isset($_POST["user_id"])) {
			
			 $user_id = $_POST["user_id"];
			 #echo $user_id ;
			 
			 #Get Surname and Initials
			 
			 $q = "SELECT `surname`, `initials` FROM `user_table` WHERE `id_no` = $user_id";
			 
			 #Run the query
			 $query = $conn->query($q);
			 while($row = mysqli_fetch_array($query)){
				 $surname = $row['surname'];
				 $initials = $row['initials'];
		   }
		}
		
      #Building Details and Evacuation Type

		if(isset($_POST["building_name"])){
			$building_name = $_POST["building_name"]; 
			echo $building_name;
		}
		
		if(isset($_POST["building_number"])){
			$building_number = $_POST["building_number"]; 
		}
		if(isset($_POST["evacuation_observer"])){
			$evacuation_observer = $_POST["evacuation_observer"]; 
		}
		
		if(isset($_POST["time_taken"])){
			$time_taken = $_POST["time_taken"]; 
		}
		
		if(empty($_POST["evacuation_type_emergency"])){
			$evacuation_type_emergency = 0;
		}
		else{
			$evacuation_type_emergency = 1;
			#echo $evacuation_type_emergency;
		}
		
		if(empty($_POST["evacuation_type_planned"])){
			$evacuation_type_planned = 0;
		}
		else{
			$evacuation_type_planned = 1;
			#echo  $evacuation_type_planned;
		}
		
		
		
	########## Process the form inputs ############
	
	    #Question 1
	    if(empty($_POST["oic_notified_yes"])){
			$oic_notified_yes = 0;
		}
		else{
			$oic_notified_yes = 1;
		}
		
		if(empty($_POST["oic_notified_no"])){
			$oic_notified_no = 0;
		}
		else{
			$oic_notified_no = 1;
		}
		
		if(isset($_POST["oic_notified_com"])){
			$oic_notified_com = $_POST["oic_notified_com"]; 
		}
		
	
		
		#Question 2
		
		if(empty($_POST["all_occupant_yes"])){
			$all_occupant_yes = 0;
		}
		else{
			$all_occupant_yes = 1;
		}
		
		if(empty($_POST["all_occupant_no"])){
			$all_occupant_no = 0;
		}
		else{
			$all_occupant_no = 1;
		}
		
		if(isset($_POST["all_occupant_com"])){
			$all_occupant_com = $_POST["all_occupant_com"]; 
		}
	
		
		#Question 3
		
		if(empty($_POST["alarm_yes"])){
			$alarm_yes = 0;
		}
		else{
			$alarm_yes = 1;
		}
		
		if(empty($_POST["alarm_no"])){
			$alarm_no = 0;
		}
		else{
			$alarm_no = 1;
		}
		
		if(isset($_POST["alarm_com"])){
			$alarm_com = $_POST["alarm_com"]; 
		}
		
		#Question 4
		
		if(empty($_POST["smoke_fire_yes"])){
			$smoke_fire_yes = 0;
		}
		else{
			$smoke_fire_yes = 1;
		}
		
		if(empty($_POST["smoke_fire_no"])){
			$smoke_fire_no = 0;
		}
		else{
			$smoke_fire_no = 1;
		}
		
		if(isset($_POST["smoke_fire_com"])){
			$smoke_fire_com = $_POST["smoke_fire_com"]; 
		}
		
		#Question 5
		
		if(empty($_POST["wardens_staff_yes"])){
			$wardens_staff_yes = 0;
		}
		else{
			$wardens_staff_yes = 1;
		}
		
		if(empty($_POST["wardens_staff_no"])){
			$wardens_staff_no = 0;
		}
		else{
			$wardens_staff_no = 1;
		}
		
		if(isset($_POST["wardens_staff_com"])){
			$wardens_staff_com = $_POST["wardens_staff_com"]; 
		}
		
		#Question 6
		
		if(empty($_POST["wardens_id_yes"])){
			$wardens_id_yes = 0;
		}
		else{
			$wardens_id_yes = 1;
		}
		
		if(empty($_POST["wardens_id_no"])){
			$wardens_id_no = 0;
		}
		else{
			$wardens_id_no = 1;
		}
		
		if(isset($_POST["wardens_id_com"])){
			$wardens_id_com = $_POST["wardens_id_com"]; 
		}
		
		#Question 7
		
		if(empty($_POST["assembly_area_yes"])){
			$assembly_area_yes = 0;
		}
		else{
			$assembly_area_yes = 1;
		}
		
		if(empty($_POST["assembly_area_no"])){
			$assembly_area_no = 0;
		}
		else{
			$assembly_area_no = 1;
		}
		
		if(isset($_POST["assembly_area_com"])){
			$assembly_area_com = $_POST["assembly_area_com"]; 
		}
		
		
		#Question 8
		
		if(empty($_POST["adequate_evacuation_yes"])){
			$adequate_evacuation_yes = 0;
		}
		else{
			$adequate_evacuation_yes = 1;
		}
		
		if(empty($_POST["adequate_evacuation_no"])){
			$adequate_evacuation_no = 0;
		}
		else{
			$adequate_evacuation_no = 1;
		}
		
		if(isset($_POST["adequate_evacuation_com"])){
			$adequate_evacuation_com = $_POST["adequate_evacuation_com"]; 
		}
		
		#Question 9
		
		if(empty($_POST["exit_ways_yes"])){
			$exit_ways_yes = 0;
		}
		else{
			$exit_ways_yes = 1;
		}
		
		if(empty($_POST["exit_ways_no"])){
			$exit_ways_no = 0;
		}
		else{
			$exit_ways_no = 1;
		}
		
		if(isset($_POST["exit_ways_com"])){
			$exit_ways_com = $_POST["exit_ways_com"]; 
		}
		
		#Question 10
		
		if(empty($_POST["firefightinge_equip_yes"])){
			$firefightinge_equip_yes = 0;
		}
		else{
			$firefightinge_equip_yes = 1;
		}
		
		if(empty($_POST["firefightinge_equip_no"])){
			$firefightinge_equip_no = 0;
		}
		else{
			$firefightinge_equip_no = 1;
		}
		
		if(isset($_POST["firefightinge_equip_com"])){
			$firefightinge_equip_com = $_POST["firefightinge_equip_com"]; 
		}
		
		#Question 11
		
		if(empty($_POST["person_responsible_yes"])){
			$person_responsible_yes = 0;
		}
		else{
			$person_responsible_yes = 1;
		}
		
		if(empty($_POST["person_responsible_no"])){
			$person_responsible_no = 0;
		}
		else{
			$person_responsible_no = 1;
		}
		
		if(isset($_POST["person_responsible_com"])){
			$person_responsible_com = $_POST["person_responsible_com"]; 
		}
		
		#Question 12
		
		if(empty($_POST["warden_training_yes"])){
			$warden_training_yes = 0;
		}
		else{
			$warden_training_yes = 1;
		}
		
		if(empty($_POST["warden_training_no"])){
			$warden_training_no = 0;
		}
		else{
			$warden_training_no = 1;
		}
		
		if(isset($_POST["warden_training_com"])){
			$warden_training_com = $_POST["warden_training_com"]; 
		}
		
		#Question 13
		
		if(empty($_POST["evacuation_successful_yes"])){
			$evacuation_successful_yes = 0;
		}
		else{
			$evacuation_successful_yes = 1;
		}
		
		if(empty($_POST["evacuation_successful_no"])){
			$evacuation_successful_no = 0;
		}
		else{
			$evacuation_successful_no = 1;
		}
		
		if(isset($_POST["evacuation_successful_com"])){
			$evacuation_successful_com = $_POST["evacuation_successful_com"]; 
		}
		
		
		#Additional Checks
		
		#Additional Check - 1
		
		if(isset($_POST["a_check_1"])){
			$a_check_1 = $_POST["a_check_1"]; 
		}
		
		if(empty($_POST["add_check_1_yes"])){
			$add_check_1_yes = 0;
		}
		else{
			$add_check_1_yes = 1;
		}
		
		if(empty($_POST["add_check_1_no"])){
			$add_check_1_no = 0;
		}
		else{
			$add_check_1_no = 1;
		}
		
		if(isset($_POST["a_check_1_com"])){
			$a_check_1_com = $_POST["a_check_1_com"]; 
		}
		
		
		#Additional Check - 2
		
		if(isset($_POST["a_check_2"])){
			$a_check_2 = $_POST["a_check_2"]; 
		}
		
		if(empty($_POST["add_check_2_yes"])){
			$add_check_2_yes = 0;
		}
		else{
			$add_check_2_yes = 1;
		}
		
		if(empty($_POST["add_check_2_no"])){
			$add_check_2_no = 0;
		}
		else{
			$add_check_2_no = 1;
		}
		
		if(isset($_POST["a_check_2_com"])){
			$a_check_2_com = $_POST["a_check_2_com"]; 
		}
		
		#Additional Check - 3
		
		if(isset($_POST["a_check_3"])){
			$a_check_3 = $_POST["a_check_3"]; 
		}
		
		if(empty($_POST["add_check_3_yes"])){
			$add_check_3_yes = 0;
		}
		else{
			$add_check_3_yes = 1;
		}
		
		if(empty($_POST["add_check_3_no"])){
			$add_check_3_no = 0;
		}
		else{
			$add_check_3_no = 1;
		}
		
		if(isset($_POST["a_check_3_com"])){
			$a_check_3_com = $_POST["a_check_3_com"]; 
		}
		
		#Additional Check - 4
		
		if(isset($_POST["a_check_4"])){
			$a_check_4 = $_POST["a_check_4"]; 
		}
		
		if(empty($_POST["add_check_4_yes"])){
			$add_check_4_yes = 0;
		}
		else{
			$add_check_4_yes = 1;
		}
		
		if(empty($_POST["add_check_4_no"])){
			$add_check_4_no = 0;
		}
		else{
			$add_check_4_no = 1;
		}
		
		if(isset($_POST["a_check_4_com"])){
			$a_check_4_com = $_POST["a_check_4_com"]; 
		}
		
	
		
		
		#Save all data to the database
		
		$qr =  "INSERT INTO `fire_drill_report`(`check_date`, `check_time`, `surname`, `initials`, `id_no`, `building_name`, `building_number`, `evacuation_observer`, `time_taken`, `evacuation_type_emergency`, `evacuation_type_planned`, `oic_notified_yes`, `oic_notified_no`, `oic_notified_com`, `all_occupant_yes`, `all_occupant_no`, `all_occupant_com`, `alarm_yes`, `alarm_no`, `alarm_com`, `smoke_fire_yes`, `smoke_fire_no`, `smoke_fire_com`, `wardens_staff_yes`, `wardens_staff_no`, `wardens_staff_com`, `wardens_id_yes`, `wardens_id_no`, `wardens_id_com`, `assembly_area_yes`, `assembly_area_no`, `assembly_area_com`, `adequate_evacuation_yes`, `adequate_evacuation_no`, `adequate_evacuation_com`, `exit_ways_yes`, `exit_ways_no`, `exit_ways_com`, `firefightinge_equip_yes`, `firefightinge_equip_no`, `firefightinge_equip_com`, `person_responsible_yes`, `person_responsible_no`, `person_responsible_com`, `warden_training_yes`, `warden_training_no`, `warden_training_com`, `evacuation_successful_yes`, `evacuation_successful_no`, `evacuation_successful_com`,
		`a_check_1`,`add_check_1_yes`, `add_check_1_no`, `a_check_1_com`, `a_check_2`,`add_check_2_yes`, `add_check_2_no`, `a_check_2_com`, `a_check_3`,`add_check_3_yes`, `add_check_3_no`, `a_check_3_com`, `a_check_4`,`add_check_4_yes`, `add_check_4_no`, `a_check_4_com`)
		       VALUES ('$check_date', '$check_time', '$surname', '$initials', '$user_id',
			  '$building_name', '$building_number', '$evacuation_observer', '$time_taken', '$evacuation_type_emergency', '$evacuation_type_planned',
			  '$oic_notified_yes', '$oic_notified_no', '$oic_notified_com',
			  '$all_occupant_yes', '$all_occupant_no', '$all_occupant_com',
			  '$alarm_yes', '$alarm_no', '$alarm_com',
			  '$smoke_fire_yes', '$smoke_fire_no', '$smoke_fire_com',
			  '$wardens_staff_yes', '$wardens_staff_no', '$wardens_staff_com',
			  '$wardens_id_yes', '$wardens_id_no', '$wardens_id_com',
			  '$assembly_area_yes', '$assembly_area_no', '$assembly_area_com',
			  '$adequate_evacuation_yes', '$adequate_evacuation_no', '$adequate_evacuation_com',
			  '$exit_ways_yes', '$exit_ways_no', '$exit_ways_com',
			  '$firefightinge_equip_yes', '$firefightinge_equip_no', '$firefightinge_equip_com',
			  '$person_responsible_yes', '$person_responsible_no', '$person_responsible_com',
			  '$warden_training_yes', '$warden_training_no', '$warden_training_com',
			  '$evacuation_successful_yes', '$evacuation_successful_no', '$evacuation_successful_com',
			  '$a_check_1', '$add_check_1_yes', '$add_check_1_no', '$a_check_1_com',
			  '$a_check_2', '$add_check_2_yes', '$add_check_2_no', '$a_check_2_com',
			  '$a_check_3', '$add_check_3_yes', '$add_check_3_no', '$a_check_3_com',
			  '$a_check_4', '$add_check_4_yes', '$add_check_4_no', '$a_check_4_com');";
		
		$run_query = $conn->query($qr);
		header("Location: /poc/thank_you.php");
	 
		 
			
} //End Big IF

?>
