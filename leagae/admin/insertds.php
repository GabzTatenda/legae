<<<<<<< HEAD
<?php
		$regNo = $_SESSION['RegNo'];
		$Fname = $_POST["Fnames"];
		$Lname = $_POST["Lname"];
		$gender = $_POST["gender"];
		$NxtFnamez = $_POST["NxtFname"];
		$occ = $_POST["occup"];
		$street = $_POST["street"];
		$zip = $_POST["zip"];
		$city = $_POST["city"];
		$contact = $_POST["phone"];
		$date = date("Y-m-d H:i:s");
		$gender = $_POST["gender"];
	
	$sql1=mysqli_query($conn,"INSERT INTO student VALUES(null,'$regNo', '$Fname', '$Lname','$NxtFnamez',
						'$gender','$stree','$dob','$city', '$contact', '$date')");
	
	print "Add data has been success";
	
		}
		else
		{
			echo "no data sent";
			header('location:studentadd.php');
		}
=======
<?php
		$regNo = $_SESSION['RegNo'];
		$Fname = $_POST["Fnames"];
		$Lname = $_POST["Lname"];
		$gender = $_POST["gender"];
		$NxtFnamez = $_POST["NxtFname"];
		$occ = $_POST["occup"];
		$street = $_POST["street"];
		$zip = $_POST["zip"];
		$city = $_POST["city"];
		$contact = $_POST["phone"];
		$date = date("Y-m-d H:i:s");
		$gender = $_POST["gender"];
	
	$sql1=mysqli_query($conn,"INSERT INTO student VALUES(null,'$regNo', '$Fname', '$Lname','$NxtFnamez',
						'$gender','$stree','$dob','$city', '$contact', '$date')");
	
	print "Add data has been success";
	
		}
		else
		{
			echo "no data sent";
			header('location:studentadd.php');
		}
>>>>>>> First commit
		?>