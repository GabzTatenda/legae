<<<<<<< HEAD
<?php
session_start();
require_once('data.php');

$action = $_GET['action'];

switch($action) 
{
	case 'add-creds':
		Adduser();
	break;
	
	case 'add-stpic':
		UploadstPhotos();
	break;
	
	case 'add-stdetails':
		crudst();
	break;
	
	case 'view-edit':
		updateStudent();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
}//switch

function Adduser()
{
	if(isset($_POST['RegNo']))
	{
			$regNo = $_POST['RegNo'];
			$pass = $_POST['pass'];
			$email = $_POST['mail'];
			$desgntn = $_POST['designation'];
			
			$sql=$conn->query("INSERT INTO credential VALUES(null,'$regNo','$pass','$email','$desgntn')");
		if($sql)
		{
			?>
		<script>
		  alert('successfully saved');
				window.location.href='upload.php';
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
	}	
}
function UploadstPhotos()
{
	if(isset($_POST['btn-upload']))
	{    
		 $regNo = $_SESSION['RegNo'];
		 $file = rand(1000,100000)."-".$_FILES['file']['name'];
		 $file_loc = $_FILES['file']['tmp_name'];
		 $file_size = $_FILES['file']['size'];
		 $file_type = $_FILES['file']['type'];
		 $folder="images/stPhotos/";
		 
		 // new file size in KB
		 $new_size = $file_size/1024;  
		 // new file size in KB
		 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
		 $final_file=str_replace(' ','-',$new_file_name);
		 
		if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		  $sql=mysqli_query($conn, "INSERT INTO studentdocs(doc_id,regNum,file,type,size) 
							VALUES(null,'$regNo','$final_file','$file_type','$new_size')");

		  ?>
		  <script>
		  alert('successfully uploaded');
				window.location.href='uploadmaterial.php?success';
				</script>
		  <?php
		 }
		 else
		 {
		  ?>
		  <script>
		  alert('error while uploading file');
				window.location.href='uploadmaterial.php?fail';
				</script>
		  <?php
		 }
	}
}
function addstudent()
{
if($_POST['Fnames'])
{

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
}

function UploadDocuments()
{
	if(isset($_POST['btn-upload']))
	{    
		 $regNo = $_POST['RegNo'];
		 $file = rand(1000,100000)."-".$_FILES['file']['name'];
		 $file_loc = $_FILES['file']['tmp_name'];
		 $file_size = $_FILES['file']['size'];
		 $file_type = $_FILES['file']['type'];
		 $folder="images/stPhotos/";
		 
		 // new file size in KB
		 $new_size = $file_size/1024;  
		 // new file size in KB
		 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
		 $final_file=str_replace(' ','-',$new_file_name);
		 
		 if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		  $sql=mysqli_query($conn, "INSERT INTO studentdocs(doc_id,regNum,file,type,size) 
							VALUES(null,'$regNo','$final_file','$file_type','$new_size')");

		  ?>
		  <script>
		  alert('successfully uploaded');
				window.location.href='uploadmaterial.php?success';
				</script>
		  <?php
		 }
		 else
		 {
		  ?>
		  <script>
		  alert('error while uploading file');
				window.location.href='uploadmaterial.php?fail';
				</script>
		  <?php
		 }
	}
}
function crudst(){
	if(isset($_POST['item_name']))
	{
		$item_regnum = $_SESSION['item_regnum'];
		$item_name = $_POST["item_name"];
		$item_surname = $_POST["item_surname"];
		$item_address = $_POST["item_address"];
		$item_gender = $_POST["item_gender"];
		$item_nok = $_POST["item_nok"];
		$item_occ = $_POST["item_occ"];
		$item_phone = $_POST["item_phone"];
		$item_date = $_POST["item_date"];
		$item_email = $_POST["item_email"];
		$item_des = $_POST["item_des"];

	query = '';
	for($count = 0; $count<count($item_name); $count++)
	{
		$item_regnum_clean = mysqli_real_escape_string($conn,$item_regnum[$count]);
		$item_name_clean = mysqli_real_escape_string($conn,$item_name[$count]);
		$item_surname_clean = mysqli_real_escape_string($conn,$item_surname[$count]);
		$item_gender_clean = mysqli_real_escape_string($conn,$item_gender[$count]);
		$item_address_clean = mysqli_real_escape_string($conn,$item_address[$count]);
		$item_nok_clean = mysqli_real_escape_string($conn,$item_nok[$count]);
		$item_occ_clean = mysqli_real_escape_string($conn,$item_occ[$count]);
		$item_phone_clean = mysqli_real_escape_string($conn,$item_phone[$count]);
		$item_date_clean = mysqli_real_escape_string($conn,$item_date[$count]);
		$item_email_clean = mysqli_real_escape_string($conn,$item_email[$count]);
		$item_des_clean = mysqli_real_escape_string($conn,$item_des[$count]);
		
		if($item_regnum_clean != ''&& $item_name_clean != ''&& $item_surname_clean != ''$item_gender_clean != ''
			&& $item_address_clean != ''$item_nok_clean != '' && $item_occ_clean != ''	&& $item_phone_clean != ''
			$item_date_clean != '' && $item_email_clean != ''	&& $item_des_clean != '')
		{
			$query .= '
			INSERT INTO studentdetails
			VALUES("'.$item_regnum_clean.'","'.$item_name_clean.'","'.$item_surname_clean.'","'.$item_gender_clean.'",
			"'.$item_address_clean.'","'.$item_nok_clean.'","'.$item_occ_clean.'","'.$item_phone_clean.'",'$date');
			';
		}
	}
	if($query !='')
	{
		if(mysqli_multi_query($conn,$query))
		{
			echo 'data inserted';
		}
		else
		{
			echo'error';
		}
	}
	else
		{
			echo 'all fields required';
		}
	}
}
function updateStudent(){
	$query = "SELECT * FROM student";
	$result = mysqli_query($conn,$query);
	$output .='
	<br />
	 <table class="table table-bordered table-stripped">
			 <tr>
				<th width="7%">RegNumber</th>
				<th width="20%">Name</th>
				<th width="20%">Surname</th>
				<th width="20%">Address</th>
				<th width="10%">Gender</th>
				<th width="25%">Next of Kin</th>
				<th width="20%">Occupation</th>
				<th width="20%">Phone Number</th>
			 
			 </tr>
			 ';
			 while($row = mysqli_fetch_array($result))
			 {
				 $output .='
				 			 <tr>
				<td >'.$row["item_regnum"].'</td>
				<td >'.$row["item_name"].'</td>
				<td >'.$row["item_surname"].'</td>
				<td >'.$row["item_address"].'</td>
				<td >'.$row["item_gender"].'</td>
				<td >'.$row["item_nok"].'</td>
				<td >'.$row["item_occ"].'</td>
				<td >'.$row["item_phone"].'</td>
			 
			 </tr>
				 ';
			 }
}
			output.=' </table>';
			echo $output;
	


=======
<?php
session_start();
require_once('data.php');

$action = $_GET['action'];

switch($action) 
{
	case 'add-creds':
		Adduser();
	break;
	
	case 'add-stpic':
		UploadstPhotos();
	break;
	
	case 'add-stdetails':
		crudst();
	break;
	
	case 'view-edit':
		updateStudent();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
}//switch

function Adduser()
{
	if(isset($_POST['RegNo']))
	{
			$regNo = $_POST['RegNo'];
			$pass = $_POST['pass'];
			$email = $_POST['mail'];
			$desgntn = $_POST['designation'];
			
			$sql=$conn->query("INSERT INTO credential VALUES(null,'$regNo','$pass','$email','$desgntn')");
		if($sql)
		{
			?>
		<script>
		  alert('successfully saved');
				window.location.href='upload.php';
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
	}	
}
function UploadstPhotos()
{
	if(isset($_POST['btn-upload']))
	{    
		 $regNo = $_SESSION['RegNo'];
		 $file = rand(1000,100000)."-".$_FILES['file']['name'];
		 $file_loc = $_FILES['file']['tmp_name'];
		 $file_size = $_FILES['file']['size'];
		 $file_type = $_FILES['file']['type'];
		 $folder="images/stPhotos/";
		 
		 // new file size in KB
		 $new_size = $file_size/1024;  
		 // new file size in KB
		 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
		 $final_file=str_replace(' ','-',$new_file_name);
		 
		if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		  $sql=mysqli_query($conn, "INSERT INTO studentdocs(doc_id,regNum,file,type,size) 
							VALUES(null,'$regNo','$final_file','$file_type','$new_size')");

		  ?>
		  <script>
		  alert('successfully uploaded');
				window.location.href='uploadmaterial.php?success';
				</script>
		  <?php
		 }
		 else
		 {
		  ?>
		  <script>
		  alert('error while uploading file');
				window.location.href='uploadmaterial.php?fail';
				</script>
		  <?php
		 }
	}
}
function addstudent()
{
if($_POST['Fnames'])
{

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
}

function UploadDocuments()
{
	if(isset($_POST['btn-upload']))
	{    
		 $regNo = $_POST['RegNo'];
		 $file = rand(1000,100000)."-".$_FILES['file']['name'];
		 $file_loc = $_FILES['file']['tmp_name'];
		 $file_size = $_FILES['file']['size'];
		 $file_type = $_FILES['file']['type'];
		 $folder="images/stPhotos/";
		 
		 // new file size in KB
		 $new_size = $file_size/1024;  
		 // new file size in KB
		 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
		 $final_file=str_replace(' ','-',$new_file_name);
		 
		 if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		  $sql=mysqli_query($conn, "INSERT INTO studentdocs(doc_id,regNum,file,type,size) 
							VALUES(null,'$regNo','$final_file','$file_type','$new_size')");

		  ?>
		  <script>
		  alert('successfully uploaded');
				window.location.href='uploadmaterial.php?success';
				</script>
		  <?php
		 }
		 else
		 {
		  ?>
		  <script>
		  alert('error while uploading file');
				window.location.href='uploadmaterial.php?fail';
				</script>
		  <?php
		 }
	}
}
function crudst(){
	if(isset($_POST['item_name']))
	{
		$item_regnum = $_SESSION['item_regnum'];
		$item_name = $_POST["item_name"];
		$item_surname = $_POST["item_surname"];
		$item_address = $_POST["item_address"];
		$item_gender = $_POST["item_gender"];
		$item_nok = $_POST["item_nok"];
		$item_occ = $_POST["item_occ"];
		$item_phone = $_POST["item_phone"];
		$item_date = $_POST["item_date"];
		$item_email = $_POST["item_email"];
		$item_des = $_POST["item_des"];

	query = '';
	for($count = 0; $count<count($item_name); $count++)
	{
		$item_regnum_clean = mysqli_real_escape_string($conn,$item_regnum[$count]);
		$item_name_clean = mysqli_real_escape_string($conn,$item_name[$count]);
		$item_surname_clean = mysqli_real_escape_string($conn,$item_surname[$count]);
		$item_gender_clean = mysqli_real_escape_string($conn,$item_gender[$count]);
		$item_address_clean = mysqli_real_escape_string($conn,$item_address[$count]);
		$item_nok_clean = mysqli_real_escape_string($conn,$item_nok[$count]);
		$item_occ_clean = mysqli_real_escape_string($conn,$item_occ[$count]);
		$item_phone_clean = mysqli_real_escape_string($conn,$item_phone[$count]);
		$item_date_clean = mysqli_real_escape_string($conn,$item_date[$count]);
		$item_email_clean = mysqli_real_escape_string($conn,$item_email[$count]);
		$item_des_clean = mysqli_real_escape_string($conn,$item_des[$count]);
		
		if($item_regnum_clean != ''&& $item_name_clean != ''&& $item_surname_clean != ''$item_gender_clean != ''
			&& $item_address_clean != ''$item_nok_clean != '' && $item_occ_clean != ''	&& $item_phone_clean != ''
			$item_date_clean != '' && $item_email_clean != ''	&& $item_des_clean != '')
		{
			$query .= '
			INSERT INTO studentdetails
			VALUES("'.$item_regnum_clean.'","'.$item_name_clean.'","'.$item_surname_clean.'","'.$item_gender_clean.'",
			"'.$item_address_clean.'","'.$item_nok_clean.'","'.$item_occ_clean.'","'.$item_phone_clean.'",'$date');
			';
		}
	}
	if($query !='')
	{
		if(mysqli_multi_query($conn,$query))
		{
			echo 'data inserted';
		}
		else
		{
			echo'error';
		}
	}
	else
		{
			echo 'all fields required';
		}
	}
}
function updateStudent(){
	$query = "SELECT * FROM student";
	$result = mysqli_query($conn,$query);
	$output .='
	<br />
	 <table class="table table-bordered table-stripped">
			 <tr>
				<th width="7%">RegNumber</th>
				<th width="20%">Name</th>
				<th width="20%">Surname</th>
				<th width="20%">Address</th>
				<th width="10%">Gender</th>
				<th width="25%">Next of Kin</th>
				<th width="20%">Occupation</th>
				<th width="20%">Phone Number</th>
			 
			 </tr>
			 ';
			 while($row = mysqli_fetch_array($result))
			 {
				 $output .='
				 			 <tr>
				<td >'.$row["item_regnum"].'</td>
				<td >'.$row["item_name"].'</td>
				<td >'.$row["item_surname"].'</td>
				<td >'.$row["item_address"].'</td>
				<td >'.$row["item_gender"].'</td>
				<td >'.$row["item_nok"].'</td>
				<td >'.$row["item_occ"].'</td>
				<td >'.$row["item_phone"].'</td>
			 
			 </tr>
				 ';
			 }
}
			output.=' </table>';
			echo $output;
	


>>>>>>> First commit
?>