<?php

	$HOST			= 'localhost';
	$DB_USERNAME 	= 'root';
	$DB_PASSWORD 	= '';
	$DB_NAME 		= 'employee';


	function getConnection(){
		global $HOST;
		global $DB_USERNAME;
		global $DB_PASSWORD;
		global $DB_NAME;

		$conn = mysqli_connect($HOST, $DB_ID, $DB_PASSWORD, $DB_NAME);
		return $conn;
	}
?>