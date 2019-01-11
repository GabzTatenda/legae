<<<<<<< HEAD
<?php
session_start();
require_once('data.php');

		$regNo = $_POST['RegNo'];
		$Fname = $_POST["Fnames"];	
		$Lname = $_POST["Lname"];
		$street = $_POST["street"];
		$gender = $_POST["gender"];
		$NxtFnamez = $_POST["NxtFname"];
		$occ = $_POST["occup"];
		$contact = $_POST["phone"];
		$pass = $_POST['pass'];
		$date = date("Y-m-d H:i:s");
		$email = $_POST['mail'];				
		$desgntn = $_POST['designation'];
		
$sql=$conn->query("INSERT INTO studentdetails VALUES(null,'$regNo', '$Fname', '$Lname','$street','$gender','$NxtFnamez','$occ', '$contact','$pass', '$date','$email','$desgntn')");	
		if($sql)
		{
			?>
		<script>
		  alert('successfully saved');
				window.location.href='uploadmaterial.php';
		</script>
			<?php
		}
		 
		else
		 {
				?>
			<script>
			  alert('error while saving student');
					window.location.href='stdntcredentials.php';
			</script>
				<?php
		 } 
=======
<?php
session_start();
require_once('data.php');

		$regNo = $_POST['RegNo'];
		$Fname = $_POST["Fnames"];	
		$Lname = $_POST["Lname"];
		$street = $_POST["street"];
		$gender = $_POST["gender"];
		$NxtFnamez = $_POST["NxtFname"];
		$occ = $_POST["occup"];
		$contact = $_POST["phone"];
		$pass = $_POST['pass'];
		$date = date("Y-m-d H:i:s");
		$email = $_POST['mail'];				
		$desgntn = $_POST['designation'];
		
$sql=$conn->query("INSERT INTO studentdetails VALUES(null,'$regNo', '$Fname', '$Lname','$street','$gender','$NxtFnamez','$occ', '$contact','$pass', '$date','$email','$desgntn')");	
		if($sql)
		{
			?>
		<script>
		  alert('successfully saved');
				window.location.href='uploadmaterial.php';
		</script>
			<?php
		}
		 
		else
		 {
				?>
			<script>
			  alert('error while saving student');
					window.location.href='stdntcredentials.php';
			</script>
				<?php
		 } 
>>>>>>> First commit
?>