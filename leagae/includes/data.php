<<<<<<< HEAD
<?php
// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'gabztee';
$dbName = 'leagae';

$conn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());

$SERVER_PATH = "http://127.0.0.1/LEAGAE/";

function dbQuery($sql)
{
	$result = mysql_query($sql) or die(mysql_error());
	
	return $result;
}

function dbAffectedRows()
{
	global $conn;
	
	return mysql_affected_rows($conn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysql_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($result)
{
	return mysql_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
=======
<?php
// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'gabztee';
$dbName = 'leagae';

$conn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());

$SERVER_PATH = "http://127.0.0.1/LEAGAE/";

function dbQuery($sql)
{
	$result = mysql_query($sql) or die(mysql_error());
	
	return $result;
}

function dbAffectedRows()
{
	global $conn;
	
	return mysql_affected_rows($conn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysql_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($result)
{
	return mysql_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
>>>>>>> First commit
?>