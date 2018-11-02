	<?php
	include('data.php');
	session_start();

	$username = $_POST['user'];
	$password =$_POST['pass'];
	$name = $_POST['fname'];
	$surname =$_POST['lname'];
	$fone = $_POST['fone'];


	if ($_POST['okbtn'])

{
$reg_query = $conn->query("INSERT INTO credential(Fname,Lname,Phone_number,username,password) VALUES ('$name','$surname','$fone','$username','$password')");

		echo "YOU HAVE SUCCESSFULLY BEEN SUCCESSFULLY REGISTERED".'&nbsp;';
		echo $conn->affected_rows;
		echo '&nbsp;'."ROW";
		header('location:login.php');

}
//else if
	
	
	?>