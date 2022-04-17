<?php

require  __DIR__.'/vendor/autoload.php';
use app\DB;
/* connect to database */

	$host = 'localhost';
	$user = 'user'; // change with your db user name
	$pass = 'password'; // change with your password
	$db = 'tinycart'; // change with your database name

	$conn = new DB($host, $user, $pass, $db);


?>
