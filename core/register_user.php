<?php

//Establish DB Connection
require_once("db_conn.php");
$conn = OpenCon();

//Add a user to db 

if(isset($_POST)){
	
	 if(isset($_POST["surname"])) { $surname = $_POST['surname']; }
	 if(isset($_POST["initials"])){ $initials = $_POST['initials']; }
	 if(isset($_POST["id_no"]))   { $id_no = $_POST['id_no']; }
	 if(isset($_POST["cell_no"])) { $cell_no = $_POST['cell_no']; }
	 if(isset($_POST["email"]))   { $email = $_POST['email']; }
}

if ($surname!="" && $initials!="" && $id_no!="" && $cell_no !="" && $email!="") { 

	#create query
	$add_user_query= "INSERT INTO `proc_check_db`.`user_table` (`surname`, `initials`, `id_no`, `email`, `cell_no`) VALUES ('$surname', '$initials', '$id_no', '$cell_no', '$email')";

	$conn->query($add_user_query);
	CloseCon($conn);
	header ("Location: /poc/add_user.php?status=1");
	
}
else {
	header ("Location: /poc/add_user.php?status=0");
}
?>
