<?php
$dbhost='localhost';
$user='root';
$pass='';
$db='Customer detail';

	$conn = mysqli_connect("localhost","root",""," Customer detail");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_db($db));
		
		
	}

?>