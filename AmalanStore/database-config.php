<?php
//define db related vars
	$host = 'localhost';
	$user = 'root';
	$pass = '';
$database = 'amalan0000';

//try to connect to db
$dbh = new PDO('mysql:host=' .$host.';
						dbname=' .$database, $user, $pass);

if(!$dbh)
{
	echo "unable to connect to database";
}
/* End config */
?>