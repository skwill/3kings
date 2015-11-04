<?php
	$db_settings = array(
        	'servername' => 'localhost', 
        	'username' => '3kings', 
        	'password' => 'Ch@ngeme123', 
        	'dbname' => '3kings'
        );

		extract($db_settings);

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 