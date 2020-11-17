<?php

//Function to open the DB Connection
function OpenCon()
 {
 $db_host = "localhost";
 $db_username = "root";
 $db_password = "";
 $db_name = "proc_check_db";
 $db_conn = new mysqli( $db_host,  $db_username, $db_password,$db_name) or die("Connect failed: %s\n". $db_conn  -> error);
 
 return $db_conn;
 }
 
function CloseCon($db_conn)
 {
 $db_conn -> close();
 }
   
?>