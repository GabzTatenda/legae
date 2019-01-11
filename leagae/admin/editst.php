<<<<<<< HEAD
<?php

$query = "SELECT * FROM studentdetails";
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
				<th width="20%">Date of Registration</th>
				<th width="20%">Email</th>
				<th width="20%">Designation</th>
			 
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
				<td >'.$row["item_date"].'</td>
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

$query = "SELECT * FROM studentdetails";
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
				<th width="20%">Date of Registration</th>
				<th width="20%">Email</th>
				<th width="20%">Designation</th>
			 
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
				<td >'.$row["item_date"].'</td>
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