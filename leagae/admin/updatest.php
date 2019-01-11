<<<<<<< HEAD
<?php
session_start();
require_once('data.php');

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
			"'.$item_address_clean.'","'.$item_nok_clean.'","'.$item_occ_clean.'","'.$item_phone_clean.'",
			"'.$item_date_clean.'","'.$item_email_clean.'","'.$item_des_clean.'");
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
			"'.$item_address_clean.'","'.$item_nok_clean.'","'.$item_occ_clean.'","'.$item_phone_clean.'",
			"'.$item_date_clean.'","'.$item_email_clean.'","'.$item_des_clean.'");
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