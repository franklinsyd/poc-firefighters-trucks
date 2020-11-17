<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Add a user to db 

if(isset($_POST)){
	
	 if(isset($_POST["brand"])) { $brand = $_POST['brand']; }
	 if(isset($_POST["registration"])){ $registration = $_POST['registration']; }
	 if(isset($_POST["truck_number"]))   { $truck_number = $_POST['truck_number']; }

}

if ($brand!="" && $registration!="" && $truck_number!="") { 

	#create query
	$add_user_query= "INSERT INTO `proc_check_db`.`trucks` (`brand`, `registration`, `truck_number`) VALUES ('$brand', '$registration', '$truck_number')";

	$conn->query($add_user_query);
	CloseCon($conn);
	header ("Location: /poc/add_truck.php?status=1");
	
}
else {
	header ("Location: /poc/add_truck.php?status=0");
}
?>
