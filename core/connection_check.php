<?php
include 'db_conn.php';
$db_conn = OpenCon();
echo "Connected Successfully";
CloseCon($db_conn);
?>