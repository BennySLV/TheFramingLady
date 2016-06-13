<?php # mysqli_connect.php

/*
* This file contains the database access information
*
* This file also establishes a connection to MySQL
* selects the database and sets the encoding
*
*/

// Set the database access information as constants:
define('DB_USER', 'root');
define('DB_PASSWORD', 'dbl8@6p');
define('DB_HOST', 'localhost');
define('DB_NAME', 'theframinglady');

// Establish the database connection:
$dbc = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verify the connection:
if($dbc->connect_error) {
	echo $dbc->connect_error;
	unset($dbc); 	
}
else {
	// Set the encoding:
	$dbc->set_charset('utf-8');
}
