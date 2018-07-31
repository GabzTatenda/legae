<?php
$DBerr1="could not connect to db";
$DBerr2="could not find your table in db";	
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'gabztee';
$dbName = 'leagae';

$conn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ($DBerr1);
$select_db = mysqli_select_db($conn, $dbName)or die($DBerr2);

