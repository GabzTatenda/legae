<?php
include('data.php');
session_start();

$log =$conn->query("SELECT * FROM credential WHERE regNum ='$un' AND password ='$pwd'")or die("ERROR during query execution".mysqli_error());

$row=$log->fetch_array();
if($row['regNum'] ==$un && $row['password']==$pwd)
{
	echo "you are now logged in".'&nbsp;'.$row['user'];
	header('Location: ../admin/admndshbrd.php');
}
else
{
	echo "wrong credentials";
}

?>