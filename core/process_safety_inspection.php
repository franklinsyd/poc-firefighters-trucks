<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Perform the checks and save them to DB

if(isset($_POST)){
	
	    if(isset($_POST["check_date"])){
			$check_date = $_POST["check_date"];
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
		
		
		#Building Details and Evacuation Type

		if(isset($_POST["building_name"])){
			$building_name = $_POST["building_name"]; 
			echo $building_name;
		}
		
		if(isset($_POST["building_number"])){
			$building_number = $_POST["building_number"]; 
		}
		if(isset($_POST["inspection_supervisor"])){
			$inspection_supervisor = $_POST["inspection_supervisor"]; 
		}
	
	
	
	
		if( empty($_POST["premises_kept_clear_yes"]))
		{ 
	      	$premises_kept_clear_yes = 0;
      	}
		else{
			$premises_kept_clear_yes = 1;
		}
		
		if( empty($_POST["premises_kept_clear_no"]))
		{ 
	      	$premises_kept_clear_no = 0;
      	}
		else{
			$premises_kept_clear_no = 1;
		}
		
		
		if( empty($_POST["clearly_labeled_yes"]))
		{ 
	      	$clearly_labeled_yes = 0;
      	}
		else{
			$clearly_labeled_yes = 1;
		}
		
		if( empty($_POST["clearly_labeled_no"]))
		{ 
	      	$clearly_labeled_no = 0;
      	}
		else{
			$clearly_labeled_no = 1;
		}
		
		if( empty($_POST["waste_removed_yes"]))
		{ 
	      	$waste_removed_yes = 0;
      	}
		else{
			$waste_removed_yes = 1;
		}
		
		if( empty($_POST["waste_removed_no"]))
		{ 
	      	$waste_removed_no = 0;
      	}
		else{
			$waste_removed_no = 1;
		}
		
		if( empty($_POST["waste_safe_place_yes"]))
		{ 
	      	$waste_safe_place_yes = 0;
      	}
		else{
			$waste_safe_place_yes = 1;
		}
		
		if( empty($_POST["waste_safe_place_no"]))
		{ 
	      	$waste_safe_place_no = 0;
      	}
		else{
			$waste_safe_place_no = 1;
		}
		
		
		if( empty($_POST["waste_safe_place_yes"]))
		{ 
	      	$waste_safe_place_yes = 0;
      	}
		else{
			$waste_safe_place_yes = 1;
		}
		
		if( empty($_POST["waste_safe_place_no"]))
		{ 
	      	$waste_safe_place_no = 0;
      	}
		else{
			$waste_safe_place_no = 1;
		}
		
		if( empty($_POST["pipe_beams_yes"]))
		{ 
	      	$pipe_beams_yes = 0;
      	}
		else{
			$pipe_beams_yes = 1;
		}
		
		if( empty($_POST["pipe_beams_no"]))
		{ 
	      	$pipe_beams_no = 0;
      	}
		else{
			$pipe_beams_no = 1;
		}
		
		
		if( empty($_POST["area_kept_free_yes"]))
		{ 
	      	$area_kept_free_yes = 0;
      	}
		else{
			$area_kept_free_yes = 1;
		}
		
		if( empty($_POST["area_kept_free_no"]))
		{ 
	      	$area_kept_free_no = 0;
      	}
		else{
			$area_kept_free_no = 1;
		}
		
		if( empty($_POST["are_gas_cyl_yes"]))
		{ 
	      	$are_gas_cyl_yes = 0;
      	}
		else{
			$are_gas_cyl_yes = 1;
		}
		
		if( empty($_POST["are_gas_cyl_no"]))
		{ 
	      	$are_gas_cyl_no = 0;
      	}
		else{
			$are_gas_cyl_no = 1;
		}
		
		if( empty($_POST["cyl_moved_yes"]))
		{ 
	      	$cyl_moved_yes = 0;
      	}
		else{
			$cyl_moved_yes = 1;
		}
		
		if( empty($_POST["cyl_moved_no"]))
		{ 
	      	$cyl_moved_no = 0;
      	}
		else{
			$cyl_moved_no = 1;
		}
		
		if( empty($_POST["empty_cylinders_yes"]))
		{ 
	      	$empty_cylinders_yes = 0;
      	}
		else{
			$empty_cylinders_yes = 1;
		}
		
		if( empty($_POST["empty_cylinders_no"]))
		{ 
	      	$empty_cylinders_no = 0;
      	}
		else{
			$empty_cylinders_no  = 1;
		}
		
		if( empty($_POST["permanent_warning_notice_yes"]))
		{ 
	      	$permanent_warning_notice_yes = 0;
      	}
		else{
			$permanent_warning_notice_yes  = 1;
		}
		
		if( empty($_POST["permanent_warning_notice_no"]))
		{ 
	      	$permanent_warning_notice_no = 0;
      	}
		else{
			$permanent_warning_notice_no  = 1;
		}
		
		if( empty($_POST["cyl_valve_uppermost_yes"]))
		{ 
	      	$cyl_valve_uppermost_yes = 0;
      	}
		else{
			$cyl_valve_uppermost_yes  = 1;
		}
		
		if( empty($_POST["cyl_valve_uppermost_no"]))
		{ 
	      	$cyl_valve_uppermost_no = 0;
      	}
		else{
			$cyl_valve_uppermost_no  = 1;
		}
		
		
		if( empty($_POST["f_liquids_stores_yes"]))
		{ 
	      	$f_liquids_stores_yes = 0;
      	}
		else{
			$f_liquids_stores_yes  = 1;
		}
		
		if( empty($_POST["f_liquids_stores_no"]))
		{ 
	      	$f_liquids_stores_no = 0;
      	}
		else{
			$f_liquids_stores_no  = 1;
		}
		
		
		if( empty($_POST["f_liquids_uncongested_yes"]))
		{ 
	      	$f_liquids_uncongested_yes = 0;
      	}
		else{
			$f_liquids_uncongested_yes  = 1;
		}
		
		if( empty($_POST["f_liquids_uncongested_no"]))
		{ 
	      	$f_liquids_uncongested_no = 0;
      	}
		else{
			$f_liquids_uncongested_no  = 1;
		}
		
		if( empty($_POST["f_liquids_containers_yes"]))
		{ 
	      	$f_liquids_containers_yes = 0;
      	}
		else{
			$f_liquids_containers_yes  = 1;
		}
		
		if( empty($_POST["f_liquids_containers_no"]))
		{ 
	      	$f_liquids_containers_no = 0;
      	}
		else{
			$f_liquids_containers_no  = 1;
		}
		
		
		if( empty($_POST["f_liquids_minimum_yes"]))
		{ 
	      	$f_liquids_minimum_yes = 0;
      	}
		else{
			$f_liquids_minimum_yes  = 1;
		}
		
		if( empty($_POST["f_liquids_minimum_no"]))
		{ 
	      	$f_liquids_minimum_no = 0;
      	}
		else{
			$f_liquids_minimum_no = 1;
		}
		
		
		if( empty($_POST["f_liquids_away_yes"]))
		{ 
	      	$f_liquids_away_yes = 0;
      	}
		else{
			$f_liquids_away_yes = 1;
		}
		
		if( empty($_POST["f_liquids_away_no"]))
		{ 
	      	$f_liquids_away_no = 0;
      	}
		else{
			$f_liquids_away_no = 1;
		}
		
		if( empty($_POST["smoking_prohibited_yes"]))
		{ 
	      	$smoking_prohibited_yes = 0;
      	}
		else{
			$smoking_prohibited_yes = 1;
		}
		
		if( empty($_POST["smoking_prohibited_no"]))
		{ 
	      	$smoking_prohibited_no = 0;
      	}
		else{
			$smoking_prohibited_no = 1;
		}
		
		if( empty($_POST["smoking_permitted_yes"]))
		{ 
	      	$smoking_permitted_yes = 0;
      	}
		else{
			$smoking_permitted_yes = 1;
		}
		
		if( empty($_POST["smoking_permitted_no"]))
		{ 
	      	$smoking_permitted_no = 0;
      	}
		else{
			$smoking_permitted_no = 1;
		}
		
		if( empty($_POST["receptacles_yes"]))
		{ 
	      	$receptacles_yes = 0;
      	}
		else{
			$receptacles_yes = 1;
		}
		
		if( empty($_POST["receptacles_no"]))
		{ 
	      	$receptacles_no = 0;
      	}
		else{
			$receptacles_no = 1;
		}
		
		if( empty($_POST["cables_not_worn_yes"]))
		{ 
	      	$cables_not_worn_yes = 0;
      	}
		else{
			$cables_not_worn_yes = 1;
		}
		
		if( empty($_POST["cables_not_worn_no"]))
		{ 
	      	$cables_not_worn_no = 0;
      	}
		else{
			$cables_not_worn_no = 1;
		}
		
		if( empty($_POST["sockets_good_yes"]))
		{ 
	      	$sockets_good_yes = 0;
      	}
		else{
			$sockets_good_yes = 1;
		}
		
		if( empty($_POST["sockets_good_no"]))
		{ 
	      	$sockets_good_no = 0;
      	}
		else{
			$sockets_good_no = 1;
		}
		
		if( empty($_POST["power_point_yes"]))
		{ 
	      	$power_point_yes = 0;
      	}
		else{
			$power_point_yes = 1;
		}
		
		if( empty($_POST["power_point_no"]))
		{ 
	      	$power_point_no = 0;
      	}
		else{
			$power_point_no = 1;
		}
		
		if( empty($_POST["exit_obstruction_yes"]))
		{ 
	      	$exit_obstruction_yes = 0;
      	}
		else{
			$exit_obstruction_yes = 1;
		}
		
		if( empty($_POST["exit_obstruction_no"]))
		{ 
	      	$exit_obstruction_no = 0;
      	}
		else{
			$exit_obstruction_no = 1;
		}
		
		if( empty($_POST["efficient_signage_yes"]))
		{ 
	      	$efficient_signage_yes = 0;
      	}
		else{
			$efficient_signage_yes = 1;
		}
		
		if( empty($_POST["efficient_signage_no"]))
		{ 
	      	$efficient_signage_no = 0;
      	}
		else{
			$efficient_signage_no = 1;
		}
		
		if( empty($_POST["doors_open_freely_yes"]))
		{ 
	      	$doors_open_freely_yes = 0;
      	}
		else{
			$doors_open_freely_yes = 1;
		}
		
		if( empty($_POST["doors_open_freely_no"]))
		{ 
	      	$doors_open_freely_no = 0;
      	}
		else{
			$doors_open_freely_no = 1;
		}
		
		if( empty($_POST["path_exit_doors_yes"]))
		{ 
	      	$path_exit_doors_yes = 0;
      	}
		else{
			$path_exit_doors_yes = 1;
		}
		
		if( empty($_POST["path_exit_doors_no"]))
		{ 
	      	$path_exit_doors_no = 0;
      	}
		else{
			$path_exit_doors_no = 1;
		}
		
		
		if( empty($_POST["extinquishers_test_yes"]))
		{ 
	      	$extinquishers_test_yes = 0;
      	}
		else{
			$extinquishers_test_yes = 1;
		}
		
		if( empty($_POST["extinquishers_test_no"]))
		{ 
	      	$extinquishers_test_no = 0;
      	}
		else{
			$extinquishers_test_no = 1;
		}
		
		if( empty($_POST["extinquishers_correct_yes"]))
		{ 
	      	$extinquishers_correct_yes = 0;
      	}
		else{
			$extinquishers_correct_yes = 1;
		}
		
		if( empty($_POST["extinquishers_correct_no"]))
		{ 
	      	$extinquishers_correct_no = 0;
      	}
		else{
			$extinquishers_correct_no = 1;
		}
		
		if( empty($_POST["extinquishers_accessible_yes"]))
		{ 
	      	$extinquishers_accessible_yes = 0;
      	}
		else{
			$extinquishers_accessible_yes = 1;
		}
		
		if( empty($_POST["extinquishers_accessible_no"]))
		{ 
	      	$extinquishers_accessible_no = 0;
      	}
		else{
			$extinquishers_accessible_no = 1;
		}
		
		if( empty($_POST["signage_displayed_yes"]))
		{ 
	      	$signage_displayed_yes = 0;
      	}
		else{
			$signage_displayed_yes = 1;
		}
		
		if( empty($_POST["signage_displayed_no"]))
		{ 
	      	$signage_displayed_no = 0;
      	}
		else{
			$signage_displayed_no = 1;
		}
		
		if( empty($_POST["emal_displayed_yes"]))
		{ 
	      	$emal_displayed_yes = 0;
      	}
		else{
			$emal_displayed_yes = 1;
		}
		
		if( empty($_POST["emal_displayed_no"]))
		{ 
	      	$emal_displayed_no = 0;
      	}
		else{
			$emal_displayed_no = 1;
		}
		
		if( empty($_POST["manual_call_yes"]))
		{ 
	      	$manual_call_yes = 0;
      	}
		else{
			$manual_call_yes = 1;
		}
		
		if( empty($_POST["manual_call_no"]))
		{ 
	      	$manual_call_no = 0;
      	}
		else{
			$manual_call_no = 1;
		}
		
		if( empty($_POST["fire_panel_good_yes"]))
		{ 
	      	$fire_panel_good_yes = 0;
      	}
		else{
			$fire_panel_good_yes = 1;
		}
		
		
		if( empty($_POST["fire_panel_good_no"]))
		{ 
	      	$fire_panel_good_no = 0;
      	}
		else{
			$fire_panel_good_no = 1;
		}
		
		
		######## Comments ################
		
		
		if(isset($_POST["premises_kept_clear_com"])){
			$premises_kept_clear_com = $_POST["premises_kept_clear_com"]; 
		}
		
		if(isset($_POST["clearly_labeled_com"])){
			$clearly_labeled_com = $_POST["clearly_labeled_com"]; 
		}
		
		if(isset($_POST["waste_removed_com"])){
			$waste_removed_com = $_POST["waste_removed_com"]; 
		}
		
		if(isset($_POST["waste_safe_place_com"])){
			$waste_safe_place_com = $_POST["waste_safe_place_com"]; 
		}
		
		if(isset($_POST["pipe_beams_com"])){
			$pipe_beams_com = $_POST["pipe_beams_com"]; 
		}
		
		if(isset($_POST["area_kept_free_com"])){
			$area_kept_free_com = $_POST["area_kept_free_com"]; 
		}
		
		if(isset($_POST["are_gas_cyl_com"])){
			$are_gas_cyl_com = $_POST["are_gas_cyl_com"]; 
		}
		
		if(isset($_POST["cyl_moved_com"])){
			$cyl_moved_com = $_POST["cyl_moved_com"]; 
		}
		
		if(isset($_POST["empty_cylinders_com"])){
			$empty_cylinders_com = $_POST["empty_cylinders_com"]; 
		}
		
		if(isset($_POST["permanent_warning_notice_com"])){
			$permanent_warning_notice_com = $_POST["permanent_warning_notice_com"]; 
		}
		
		if(isset($_POST["cyl_valve_uppermost_com"])){
			$cyl_valve_uppermost_com = $_POST["cyl_valve_uppermost_com"]; 
		}
		
		if(isset($_POST["f_liquids_stores_com"])){
			$f_liquids_stores_com = $_POST["f_liquids_stores_com"]; 
		}
		
		if(isset($_POST["f_liquids_uncongested_com"])){
			$f_liquids_uncongested_com = $_POST["f_liquids_uncongested_com"]; 
		}
		
		if(isset($_POST["f_liquids_containers_com"])){
			$f_liquids_containers_com = $_POST["f_liquids_containers_com"]; 
		}
		
		if(isset($_POST["f_liquids_minimum_com"])){
			$f_liquids_minimum_com = $_POST["f_liquids_minimum_com"]; 
		}
		
		if(isset($_POST["f_liquids_away_com"])){
			$f_liquids_away_com = $_POST["f_liquids_away_com"]; 
		}
		
		if(isset($_POST["smoking_prohibited_com"])){
			$smoking_prohibited_com = $_POST["smoking_prohibited_com"]; 
		}
		
		if(isset($_POST["smoking_permitted_com"])){
			$smoking_permitted_com = $_POST["smoking_permitted_com"]; 
		}
		
		if(isset($_POST["receptacles_com"])){
			$receptacles_com = $_POST["receptacles_com"]; 
		}
		
		if(isset($_POST["cables_not_worn_com"])){
			$cables_not_worn_com = $_POST["cables_not_worn_com"]; 
		}
		
		if(isset($_POST["sockets_good_com"])){
			$sockets_good_com = $_POST["sockets_good_com"]; 
		}
		
		if(isset($_POST["power_point_com"])){
			$power_point_com = $_POST["power_point_com"]; 
		}
		
		if(isset($_POST["exit_obstruction_com"])){
			$exit_obstruction_com = $_POST["exit_obstruction_com"]; 
		}
		
		if(isset($_POST["efficient_signage_com"])){
			$efficient_signage_com = $_POST["efficient_signage_com"]; 
		}
		
		if(isset($_POST["doors_open_freely_com"])){
			$doors_open_freely_com = $_POST["doors_open_freely_com"]; 
		}
		
		if(isset($_POST["path_exit_doors_com"])){
			$path_exit_doors_com = $_POST["path_exit_doors_com"]; 
		}
		
		if(isset($_POST["extinquishers_test_com"])){
			$extinquishers_test_com = $_POST["extinquishers_test_com"]; 
		}
		
		if(isset($_POST["extinquishers_correct_com"])){
			$extinquishers_correct_com = $_POST["extinquishers_correct_com"]; 
		}
		
		if(isset($_POST["extinquishers_accessible_com"])){
			$extinquishers_accessible_com = $_POST["extinquishers_accessible_com"]; 
		}
		
		if(isset($_POST["signage_displayed_com"])){
			$signage_displayed_com = $_POST["signage_displayed_com"]; 
		}
		if(isset($_POST["emal_displayed_com"])){
			$emal_displayed_com = $_POST["emal_displayed_com"]; 
		}
		if(isset($_POST["manual_call_com"])){
			$manual_call_com = $_POST["manual_call_com"]; 
		}
	
	    if(isset($_POST["fire_panel_good_com"])){
			$fire_panel_good_com = $_POST["fire_panel_good_com"]; 
		}
		
		
		/*** Additional Checks ****/
		
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
		
		#Additional Check - 5
		
		if(isset($_POST["a_check_5"])){
			$a_check_5 = $_POST["a_check_5"]; 
		}
		
		if(empty($_POST["add_check_5_yes"])){
			$add_check_5_yes = 0;
		}
		else{
			$add_check_5_yes = 1;
		}
		
		if(empty($_POST["add_check_5_no"])){
			$add_check_5_no = 0;
		}
		else{
			$add_check_5_no = 1;
		}
		
		if(isset($_POST["a_check_5_com"])){
			$a_check_5_com = $_POST["a_check_5_com"]; 
		}
	
		/* Save everything into the database */
		
		$big_q = "INSERT INTO `proc_check_db`.`fire_safety_report` (`check_date`, `surname`, `initials`, `id_no`, `building_name`, `building_number`, `inspection_supervisor`, `premises_kept_clear_yes`, `premises_kept_clear_no`, `clearly_labeled_yes`, `clearly_labeled_no`, `waste_removed_yes`, `waste_removed_no`, `waste_safe_place_yes`, `waste_safe_place_no`, `pipe_beams_yes`, `pipe_beams_no`, `area_kept_free_yes`, `area_kept_free_no`, `are_gas_cyl_yes`, `are_gas_cyl_no`, `cyl_moved_yes`, `cyl_moved_no`, `empty_cylinders_yes`, `empty_cylinders_no`, `permanent_warning_notice_yes`, `permanent_warning_notice_no`, `cyl_valve_uppermost_yes`, `cyl_valve_uppermost_no`, `f_liquids_stores_yes`, `f_liquids_stores_no`, `f_liquids_uncongested_yes`, `f_liquids_uncongested_no`, `f_liquids_containers_yes`, `f_liquids_containers_no`, `f_liquids_minimum_yes`, `f_liquids_minimum_no`, `f_liquids_away_yes`, `f_liquids_away_no`, `smoking_prohibited_yes`, `smoking_prohibited_no`, `smoking_permitted_yes`, `smoking_permitted_no`, `receptacles_yes`, `receptacles_no`, `cables_not_worn_yes`, `cables_not_worn_no`, `sockets_good_yes`, `sockets_good_no`, `power_point_yes`, `power_point_no`, `exit_obstruction_yes`, `exit_obstruction_no`, `efficient_signage_yes`, `efficient_signage_no`, `doors_open_freely_yes`, `doors_open_freely_no`, `path_exit_doors_yes`, `path_exit_doors_no`, `extinquishers_test_yes`, `extinquishers_test_no`, `extinquishers_correct_yes`, `extinquishers_correct_no`, `extinquishers_accessible_yes`, `extinquishers_accessible_no`, `signage_displayed_yes`, `signage_displayed_no`, `emal_displayed_yes`, `emal_displayed_no`, `manual_call_yes`, `manual_call_no`, `fire_panel_good_yes`, `fire_panel_good_no`, `premises_kept_clear_com`, `clearly_labeled_com`, `waste_removed_com`, `waste_safe_place_com`, `pipe_beams_com`, `area_kept_free_com`, `are_gas_cyl_com`, `cyl_moved_com`, `empty_cylinders_com`, `permanent_warning_notice_com`, `cyl_valve_uppermost_com`, `f_liquids_stores_com`, `f_liquids_uncongested_com`, `f_liquids_containers_com`, `f_liquids_minimum_com`, `f_liquids_away_com`, `smoking_prohibited_com`, `smoking_permitted_com`, `receptacles_com`, `cables_not_worn_com`, `sockets_good_com`, `power_point_com`, `exit_obstruction_com`, `efficient_signage_com`, `doors_open_freely_com`, `path_exit_doors_com`, `extinquishers_test_com`, `extinquishers_correct_com`, `extinquishers_accessible_com`, `signage_displayed_com`, `emal_displayed_com`, `manual_call_com`, `fire_panel_good_com`,
		`a_check_1`,`add_check_1_yes`, `add_check_1_no`, `a_check_1_com`, `a_check_2`,`add_check_2_yes`, `add_check_2_no`, `a_check_2_com`, `a_check_3`,`add_check_3_yes`, `add_check_3_no`, `a_check_3_com`, `a_check_4`,`add_check_4_yes`, `add_check_4_no`, `a_check_4_com`, `a_check_5`,`add_check_5_yes`, `add_check_5_no`, `a_check_5_com`)
		          VALUES ('$check_date', '$surname', '$initials', '$user_id', '$building_name', '$building_number', '$inspection_supervisor',
				  '$premises_kept_clear_yes', '$premises_kept_clear_no', '$clearly_labeled_yes', '$clearly_labeled_no', '$waste_removed_yes', '$waste_removed_no', '$waste_safe_place_yes', '$waste_safe_place_no', '$pipe_beams_yes', '$pipe_beams_no', '$area_kept_free_yes', '$area_kept_free_no', '$are_gas_cyl_yes', '$are_gas_cyl_no', '$cyl_moved_yes', '$cyl_moved_no', '$empty_cylinders_yes', '$empty_cylinders_no', '$permanent_warning_notice_yes', '$permanent_warning_notice_no', '$cyl_valve_uppermost_yes', '$cyl_valve_uppermost_no', '$f_liquids_stores_yes', '$f_liquids_stores_no',
				  '$f_liquids_uncongested_yes', '$f_liquids_uncongested_no', '$f_liquids_containers_yes', '$f_liquids_containers_no', '$f_liquids_minimum_yes', '$f_liquids_minimum_no', '$f_liquids_away_yes', '$f_liquids_away_no', '$smoking_prohibited_yes', '$smoking_prohibited_no', '$smoking_permitted_yes', '$smoking_permitted_no', '$receptacles_yes', '$receptacles_no', '$cables_not_worn_yes', '$cables_not_worn_no', '$sockets_good_yes', '$sockets_good_no', '$power_point_yes', '$power_point_no', '$exit_obstruction_yes', '$exit_obstruction_no', '$efficient_signage_yes', '$efficient_signage_no',
				  '$doors_open_freely_yes', '$doors_open_freely_no', '$path_exit_doors_yes', '$path_exit_doors_no', '$extinquishers_test_yes', '$extinquishers_test_no', '$extinquishers_correct_yes', '$extinquishers_correct_no', '$extinquishers_accessible_yes', '$extinquishers_accessible_no', '$signage_displayed_yes', '$signage_displayed_no', '$emal_displayed_yes', '$emal_displayed_no', '$manual_call_yes', '$manual_call_no', '$fire_panel_good_yes', '$fire_panel_good_no',
				  '$premises_kept_clear_com', '$clearly_labeled_com','$waste_removed_com','$waste_safe_place_com','$pipe_beams_com','$area_kept_free_com','$are_gas_cyl_com','$cyl_moved_com','$empty_cylinders_com', '$permanent_warning_notice_com', '$cyl_valve_uppermost_com', '$f_liquids_stores_com', '$f_liquids_uncongested_com', '$f_liquids_containers_com', '$f_liquids_minimum_com',
				  '$f_liquids_away_com', '$smoking_prohibited_com', '$smoking_permitted_com', '$receptacles_com', '$cables_not_worn_com', '$sockets_good_com', '$power_point_com', '$exit_obstruction_com', '$efficient_signage_com', '$doors_open_freely_com', '$path_exit_doors_com', '$extinquishers_test_com', '$extinquishers_correct_com', '$extinquishers_accessible_com', '$signage_displayed_com', '$emal_displayed_com', '$manual_call_com', '$fire_panel_good_com',
				  '$a_check_1', '$add_check_1_yes', '$add_check_1_no', '$a_check_1_com',
				  '$a_check_2', '$add_check_2_yes', '$add_check_2_no', '$a_check_2_com',
				  '$a_check_3', '$add_check_3_yes', '$add_check_3_no', '$a_check_3_com',
				  '$a_check_4', '$add_check_4_yes', '$add_check_4_no', '$a_check_4_com',
				  '$a_check_5', '$add_check_5_yes', '$add_check_5_no', '$a_check_5_com');";
			  
		 #$big_q = "INSERT INTO `proc_check_db`.`new_tiv_fire_truck` (`ID`, `id_no`, `mode`, `date_time`, `surname`, `initials`, `hydraulic_jack`, `ac_power_supply_cord`, `life_jacekts`, `emergency_triangle`, `small_first_aid_kit`, `tyre_spanner_set`, `medical_gloves_box`, `dust_mask`, `torch`, `winch_controller`, `dcp_unit`, `nitrogen_cyl`, `power_gun`, `loop_sling`, `dcp_hose_reel`, `wolf_lamp_and_charger`, `light_mast_control_unit`, `haz_mat_bag`, `portable_generator`, `spark_plug`, `spark_plug_spanner`, `tools_box`, `rescue_line_90_meters`, `gp_line`, `45_dcp_fire_extinguisher`, `38_25_m_hose`, `64_30_m_hose`, `hydrant_f_key`, `cross_wheel_spanner`, `38_mm_branch`, `main_pump`, `suction_wrench`, `line_rescue_helmets`, `5kg_co2_fire_extinguisher`, `spade`, `rescue_harness_restraints`, `pinch_bar`, `cooler_box`, `hydrant_key`, `rigging_plats_anchor_straps`, `dyna_medical_black_pack`, `para_guard_stretcher`, `scba_sets`, `fall_arresters_ascenders_pack`, `auto_lock_descender_pack`, `locking_karabiners_pack`, `foam_drum`, `pick_up_tube`, `waste_disposal_plastic_bins`, `cafs_foam_branch`, `cafs_system`, `38_25_mtr_hose`, `extension_ladder`, `hard_suction_hose`, `mast_light`, `water_level`, `foam_level`, `diesel_level`) VALUES (NULL, '$user_id', '$mode', '2019-08-05 00:00:00', '$surname', '$initials', '$hydraulic_jack', '$ac_power_supply_cord', '$life_jacekts', '$emergency_triangle', '$small_first_aid_kit', '$tyre_spanner_set', '$tyre_spanner_set', '$dust_mask', '$torch', '$winch_controller', '$dcp_unit', '$nitrogen_cyl', '$power_gun', '$loop_sling', '$dcp_hose_reel', '$wolf_lamp_and_charger', '$light_mast_control_unit', '$haz_mat_bag', '$portable_generator', '$spark_plug', '$spark_plug_spanner', '$tools_box', '$rescue_line_90_meters', '$gp_line', '$_45_dcp_fire_extinguisher', '$_38_25_m_hose', '$_64_30_m_hose', '$hydrant_f_key', '$cross_wheel_spanner', '$_38_mm_branch', '$main_pump', '$suction_wrench', '$line_rescue_helmets', '$_5kg_co2_fire_extinguisher', '$spade', '$rescue_harness_restraints', '$pinch_bar', '$cooler_box', '$hydrant_key', '$rigging_plats_anchor_straps', '$dyna_medical_black_pack', '$para_guard_stretcher', '$scba_sets', '$fall_arresters_ascenders_pack', '$auto_lock_descender_pack', '$locking_karabiners_pack', '$foam_drum', '$pick_up_tube', '$waste_disposal_plastic_bins', '$cafs_foam_branch', '$cafs_system', '$_38_25_mtr_hose', '$extension_ladder', '$hard_suction_hose', '$mast_light', '$water_level', '$foam_level', '$diesel_level');";
		#Run the query
	     $run_query = $conn->query($big_q);
		 
		 header("Location: /poc/thank_you.php");
		 
	  }


