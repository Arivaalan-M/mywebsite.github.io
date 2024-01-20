<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db); 
if($conn->connect_error) 
die($conn->connect_error);
$query = "INSERT INTO students VALUES(03,'AAA',80,85,75,(80+85+75),(80+85+75)/3)";
$result = $conn->query($query);
if (!$result) 
die ("Database access failed: " . $conn->error);
else
	echo "Data Inserted Successfully";
?>

