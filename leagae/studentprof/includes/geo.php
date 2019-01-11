<<<<<<< HEAD
<?php
include_once 'data.php';
?>
<html>

 <table width="80%" border="1">
    <tr>
    <th colspan="4">Subject Materials</th>
    </tr>
    <tr>
    <td>Id</td>	
	<td>Subject Name</td>
    <td>Teacher Name</td>
    <td>Date Uploaded</td>
    <td>View</td>
    </tr>
 <?php
 $sql=mysqli_query($conn, "SELECT * FROM studentdocs");

while($row=$sql->fetch_assoc()){
  ?>
        <tr>
		<td><?php echo $row['regNum'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>

</body>
=======
<?php
include_once 'data.php';
?>
<html>

 <table width="80%" border="1">
    <tr>
    <th colspan="4">Subject Materials</th>
    </tr>
    <tr>
    <td>Id</td>	
	<td>Subject Name</td>
    <td>Teacher Name</td>
    <td>Date Uploaded</td>
    <td>View</td>
    </tr>
 <?php
 $sql=mysqli_query($conn, "SELECT * FROM studentdocs");

while($row=$sql->fetch_assoc()){
  ?>
        <tr>
		<td><?php echo $row['regNum'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>

</body>
>>>>>>> First commit
</html>