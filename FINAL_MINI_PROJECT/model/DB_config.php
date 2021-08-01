<?php

	$HOST			= 'localhost';
	$DB_USERNAME 	= 'root';
	$DB_PASSWORD 	= '';
	$DB_NAME 		= 'miniproject';


	function getConnection(){
		global $HOST;
		global $DB_ID;
		global $DB_PASSWORD;
		global $DB_NAME;

		$conn = mysqli_connect($HOST, $DB_ID, $DB_PASSWORD, $DB_NAME);
		return $conn;
	}
?>