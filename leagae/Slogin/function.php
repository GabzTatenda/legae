<?php
include('data.php');
session_start();

		
		$un = $_POST['user'];
		$pwd =$_POST['pass'];


		$log =$conn->query("SELECT * FROM credential WHERE regNum ='$un' AND password ='$pwd'")or die("ERROR during query execution".mysqli_error());

		$row=$log->fetch_array();
		if($row['regNum'] ==$un && $row['password']==$pwd)
		{
			echo"success";
			header('Location: ../studentprof/stprofile.php');
		}
		else
		{
			echo "wrong credentials";
		}
?>