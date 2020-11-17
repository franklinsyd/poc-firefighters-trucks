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
			 }
		 }
		 
		 if(isset($_POST["truck_registration"])) {
			
			 $truck_registration = $_POST["truck_registration"];
			 //echo $user_id ;
			 
			 #Get Surname and Initials
			 
			 $q = "SELECT `brand`, `registration` FROM `trucks` WHERE `registration` = $truck_registration";
			 
			 #Run the query
			 $query = $conn->query($q);
			 while($row = mysqli_fetch_array($query)){
				 $brand= $row['brand'];
				 $registration = $row['registration'];
			 }
		 }
		
	
		if( empty($_POST["hydraulic_jack"]))
		{ 
	      	$hydraulic_jack = 0;
	        //echo $hydraulic_jack;
      	}
		else{
			$hydraulic_jack = 1;
	        //echo $hydraulic_jack;
		}
			
		if( empty($_POST["ac_power_supply_cord"]))
		{ 
	      	$ac_power_supply_cord = 0;
      	}
		else{
			$ac_power_supply_cord = 1;
		}
		
		if( empty($_POST["life_jacekts"]))
		{ 
	      	$life_jacekts = 0;
      	}
		else{
			$life_jacekts = 1;
		}
		
		if( empty($_POST["emergency_triangle"]))
		{ 
	      	$emergency_triangle = 0;
      	}
		else{
			$emergency_triangle = 1;
		}
		
		if( empty($_POST["small_first_aid_kit"]))
		{ 
	      	$small_first_aid_kit = 0;
      	}
		else{
			$small_first_aid_kit = 1;
		}
		
		if( empty($_POST["tyre_spanner_set"]))
		{ 
	      	$tyre_spanner_set = 0;
      	}
		else{
			$tyre_spanner_set = 1;
		}
		
		if( empty($_POST["medical_gloves_box"]))
		{ 
	      	$medical_gloves_box = 0;
      	}
		else{
			$medical_gloves_box = 1;
		}
		
		if( empty($_POST["dust_mask"]))
		{ 
	      	$dust_mask = 0;
      	}
		else{
			$dust_mask = 1;
		}
		
		if( empty($_POST["torch"]))
		{ 
	      	$torch = 0;
      	}
		else{
			$torch = 1;
		}
		
		if( empty($_POST["winch_controller"]))
		{ 
	      	$winch_controller = 0;
      	}
		else{
			$winch_controller = 1;
		}
		
		if( empty($_POST["dcp_unit"]))
		{ 
	      	$dcp_unit = 0;
      	}
		else{
			$dcp_unit = 1;
		}
		
		if( empty($_POST["nitrogen_cyl"]))
		{ 
	      	$nitrogen_cyl = 0;
      	}
		else{
			$nitrogen_cyl = 1;
		}
		
		if( empty($_POST["power_gun"]))
		{ 
	      	$power_gun = 0;
      	}
		else{
			$power_gun = 1;
		}
		
		if( empty($_POST["loop_sling"]))
		{ 
	      	$loop_sling = 0;
      	}
		else{
			$loop_sling = 1;
		}
		
		if( empty($_POST["dcp_hose_reel"]))
		{ 
	      	$dcp_hose_reel = 0;
      	}
		else{
			$dcp_hose_reel = 1;
		}
		
		if( empty($_POST["wolf_lamp_and_charger"]))
		{ 
	      	$wolf_lamp_and_charger = 0;
      	}
		else{
			$wolf_lamp_and_charger = 1;
		}
		
		if( empty($_POST["light_mast_control_unit"]))
		{ 
	      	$light_mast_control_unit = 0;
      	}
		else{
			$light_mast_control_unit = 1;
		}
		
		if( empty($_POST["haz_mat_bag"]))
		{ 
	      	$haz_mat_bag = 0;
      	}
		else{
			$haz_mat_bag = 1;
		}
		
		if( empty($_POST["portable_generator"]))
		{ 
	      	$portable_generator = 0;
      	}
		else{
			$portable_generator = 1;
		}
		
		if( empty($_POST["spark_plug"]))
		{ 
	      	$spark_plug = 0;
      	}
		else{
			$spark_plug = 1;
		}
		
		if( empty($_POST["spark_plug_spanner"]))
		{ 
	      	$spark_plug_spanner = 0;
      	}
		else{
			$spark_plug_spanner = 1;
		}
		
		if( empty($_POST["tools_box"]))
		{ 
	      	$tools_box = 0;
      	}
		else{
			$tools_box = 1;
		}
		
		if( empty($_POST["rescue_line_90_meters"]))
		{ 
	      	$rescue_line_90_meters = 0;
      	}
		else{
			$rescue_line_90_meters = 1;
		}
		
		if( empty($_POST["gp_line"]))
		{ 
	      	$gp_line = 0;
      	}
		else{
			$gp_line = 1;
		}
		
		if( empty($_POST["45_dcp_fire_extinguisher"]))
		{ 
	      	$_45_dcp_fire_extinguisher = 0;
      	}
		else{
			$_45_dcp_fire_extinguisher = 1;
		}
		
		if( empty($_POST["38_25_m_hose"]))
		{ 
	      	$_38_25_m_hose = 0;
      	}
		else{
			$_38_25_m_hose = 1;
		}
		
		if( empty($_POST["64_30_m_hose"]))
		{ 
	      	$_64_30_m_hose = 0;
      	}
		else{
			$_64_30_m_hose = 1;
		}
		
		if( empty($_POST["hydrant_f_key"]))
		{ 
	      	$hydrant_f_key = 0;
      	}
		else{
			$hydrant_f_key = 1;
		}
		
		if( empty($_POST["cross_wheel_spanner"]))
		{ 
	      	$cross_wheel_spanner = 0;
      	}
		else{
			$cross_wheel_spanner = 1;
		}
		
		if( empty($_POST["38_mm_branch"]))
		{ 
	      	$_38_mm_branch = 0;
      	}
		else{
			$_38_mm_branch = 1;
		}
		
		if( empty($_POST["main_pump"]))
		{ 
	      	$main_pump = 0;
      	}
		else{
			$main_pump = 1;
		}
		
		if( empty($_POST["suction_wrench"]))
		{ 
	      	$suction_wrench = 0;
      	}
		else{
			$suction_wrench = 1;
		}
		
		if( empty($_POST["line_rescue_helmets"]))
		{ 
	      	$line_rescue_helmets = 0;
      	}
		else{
			$line_rescue_helmets = 1;
		}
		
		if( empty($_POST["5kg_co2_fire_extinguisher"]))
		{ 
	      	$_5kg_co2_fire_extinguisher = 0;
      	}
		else{
			$_5kg_co2_fire_extinguisher = 1;
		}
		
		if( empty($_POST["spade"]))
		{ 
	      	$spade = 0;
      	}
		else{
			$spade = 1;
		}
		
		if( empty($_POST["rescue_harness_restraints"]))
		{ 
	      	$rescue_harness_restraints = 0;
      	}
		else{
			$rescue_harness_restraints = 1;
		}
		
		if( empty($_POST["pinch_bar"]))
		{ 
	      	$pinch_bar = 0;
      	}
		else{
			$pinch_bar = 1;
		}
		
		if( empty($_POST["cooler_box"]))
		{ 
	      	$cooler_box = 0;
      	}
		else{
			$cooler_box = 1;
		}
		
		if( empty($_POST["hydrant_key"]))
		{ 
	      	$hydrant_key = 0;
      	}
		else{
			$hydrant_key = 1;
		}
		
		if( empty($_POST["rigging_plats_anchor_straps"]))
		{ 
	      	$rigging_plats_anchor_straps = 0;
      	}
		else{
			$rigging_plats_anchor_straps = 1;
		}
		
		if( empty($_POST["dyna_medical_black_pack"]))
		{ 
	      	$dyna_medical_black_pack = 0;
      	}
		else{
			$dyna_medical_black_pack = 1;
		}
		
		if( empty($_POST["para_guard_stretcher"]))
		{ 
	      	$para_guard_stretcher = 0;
      	}
		else{
			$para_guard_stretcher = 1;
		}
		
		if( empty($_POST["scba_sets"]))
		{ 
	      	$scba_sets = 0;
      	}
		else{
			$scba_sets = 1;
		}
		
		if( empty($_POST["fall_arresters_ascenders_pack"]))
		{ 
	      	$fall_arresters_ascenders_pack = 0;
      	}
		else{
			$fall_arresters_ascenders_pack = 1;
		}
		
		if( empty($_POST["auto_lock_descender_pack"]))
		{ 
	      	$auto_lock_descender_pack = 0;
      	}
		else{
			$auto_lock_descender_pack = 1;
		}
		
		if( empty($_POST["locking_karabiners_pack"]))
		{ 
	      	$locking_karabiners_pack = 0;
      	}
		else{
			$locking_karabiners_pack = 1;
		}
		
		if( empty($_POST["foam_drum"]))
		{ 
	      	$foam_drum = 0;
      	}
		else{
			$foam_drum = 1;
		}
		
		if( empty($_POST["pick_up_tube"]))
		{ 
	      	$pick_up_tube = 0;
      	}
		else{
			$pick_up_tube = 1;
		}
		
		if( empty($_POST["waste_disposal_plastic_bins"]))
		{ 
	      	$waste_disposal_plastic_bins = 0;
      	}
		else{
			$waste_disposal_plastic_bins = 1;
		}
		
		if( empty($_POST["cafs_foam_branch"]))
		{ 
	      	$cafs_foam_branch = 0;
      	}
		else{
			$cafs_foam_branch = 1;
		}
		
		if( empty($_POST["cafs_system"]))
		{ 
	      	$cafs_system = 0;
      	}
		else{
			$cafs_system = 1;
		}
		
		if( empty($_POST["38_25_mtr_hose"]))
		{ 
	      	$_38_25_mtr_hose = 0;
      	}
		else{
			$_38_25_mtr_hose = 1;
		}
		
		if( empty($_POST["extension_ladder"]))
		{ 
	      	$extension_ladder = 0;
      	}
		else{
			$extension_ladder = 1;
		}
		
		if( empty($_POST["hard_suction_hose"]))
		{ 
	      	$hard_suction_hose = 0;
      	}
		else{
			$hard_suction_hose = 1;
		}
		
		if( empty($_POST["mast_light"]))
		{ 
	      	$mast_light = 0;
      	}
		else{
			$mast_light = 1;
		}
		
		if( empty($_POST["water_level"]))
		{ 
	      	$water_level = 0;
      	}
		else{
			$water_level = 1;
			
		}
		
		if( empty($_POST["foam_level"]))
		{ 
	      	$foam_level = 0;
      	}
		else{
			$foam_level = 1;
		}
		
		if( empty($_POST["diesel_level"]))
		{ 
	      	$diesel_level = 0;
			
      	}
		else{
			$diesel_level = 1;
			
		}
	   
		 $big_q = "INSERT INTO `proc_check_db`.`new_tiv_fire_truck` (`ID`, `id_no`, `mode`, `date_time`, `surname`, `initials`, `truck_registration`, `truck_brand`, `hydraulic_jack`, `ac_power_supply_cord`, `life_jacekts`, `emergency_triangle`, `small_first_aid_kit`, `tyre_spanner_set`, `medical_gloves_box`, `dust_mask`, `torch`, `winch_controller`, `dcp_unit`, `nitrogen_cyl`, `power_gun`, `loop_sling`, `dcp_hose_reel`, `wolf_lamp_and_charger`, `light_mast_control_unit`, `haz_mat_bag`, `portable_generator`, `spark_plug`, `spark_plug_spanner`, `tools_box`, `rescue_line_90_meters`, `gp_line`, `45_dcp_fire_extinguisher`, `38_25_m_hose`, `64_30_m_hose`, `hydrant_f_key`, `cross_wheel_spanner`, `38_mm_branch`, `main_pump`, `suction_wrench`, `line_rescue_helmets`, `5kg_co2_fire_extinguisher`, `spade`, `rescue_harness_restraints`, `pinch_bar`, `cooler_box`, `hydrant_key`, `rigging_plats_anchor_straps`, `dyna_medical_black_pack`, `para_guard_stretcher`, `scba_sets`, `fall_arresters_ascenders_pack`, `auto_lock_descender_pack`, `locking_karabiners_pack`, `foam_drum`, `pick_up_tube`, `waste_disposal_plastic_bins`, `cafs_foam_branch`, `cafs_system`, `38_25_mtr_hose`, `extension_ladder`, `hard_suction_hose`, `mast_light`, `water_level`, `foam_level`, `diesel_level`) VALUES (NULL, '$user_id', '$mode', '2019-08-05 00:00:00', '$surname', '$initials', '$truck_registration', '$brand', '$hydraulic_jack', '$ac_power_supply_cord', '$life_jacekts', '$emergency_triangle', '$small_first_aid_kit', '$tyre_spanner_set', '$tyre_spanner_set', '$dust_mask', '$torch', '$winch_controller', '$dcp_unit', '$nitrogen_cyl', '$power_gun', '$loop_sling', '$dcp_hose_reel', '$wolf_lamp_and_charger', '$light_mast_control_unit', '$haz_mat_bag', '$portable_generator', '$spark_plug', '$spark_plug_spanner', '$tools_box', '$rescue_line_90_meters', '$gp_line', '$_45_dcp_fire_extinguisher', '$_38_25_m_hose', '$_64_30_m_hose', '$hydrant_f_key', '$cross_wheel_spanner', '$_38_mm_branch', '$main_pump', '$suction_wrench', '$line_rescue_helmets', '$_5kg_co2_fire_extinguisher', '$spade', '$rescue_harness_restraints', '$pinch_bar', '$cooler_box', '$hydrant_key', '$rigging_plats_anchor_straps', '$dyna_medical_black_pack', '$para_guard_stretcher', '$scba_sets', '$fall_arresters_ascenders_pack', '$auto_lock_descender_pack', '$locking_karabiners_pack', '$foam_drum', '$pick_up_tube', '$waste_disposal_plastic_bins', '$cafs_foam_branch', '$cafs_system', '$_38_25_mtr_hose', '$extension_ladder', '$hard_suction_hose', '$mast_light', '$water_level', '$foam_level', '$diesel_level');";
		#Run the query
	     $run_query = $conn->query($big_q);
		 
		 header("Location: /poc/thank_you.php");
		 
	  }


