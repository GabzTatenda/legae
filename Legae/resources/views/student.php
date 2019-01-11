<<<<<<< HEAD
@extends('layouts.app')

<div class="coverpad"></div>
<div class="coverpadz"><img src="" width="850px" /></div>

<div class="profilepic"></div>
<div class="profilepicz"><img src = "" height="140px" /></div>


  <div class="username">Gabz <br>Tatenda</div>
<div class="box12">Fees</div>
<div class="box13">Results</div>
<div class="box14">Class</div>
  <select>
    <option selected>Subjects</option>
    <option value="tr">Teachers</option>
    <option value="submat">Materials</option>
  </select>

<table width="80%" border="1">
  <tr>
  <th colspan="4">Subjects</th>
  </tr>
  <tr>
<td>Subject Code</td>
<td>Subject Name</td>
  <td>Learning Materials</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM classes");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['className'] ?></td>
      <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['TeacherName'] ?></td>
      <td><?php echo $row['passrate'] ?></td>
      <td><a href="includes/" target="_blank">view</a></td>
      </tr>
      <?php
}
?>

  </table>

<table width="80%" border="1">
  <tr>
  <th colspan="4">Teachers</th>
  </tr>
  <tr>
<td>Subject Name</td>
  <td>Teacher Name</td>
  <td>Pass Rate</td>
  <td>Publications</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM teachers");

while($row=$sql->fetch_assoc()){
?>
      <tr>
      <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['TeacherName'] ?></td>
      <td><?php echo $row['passrate'] ?></td>
  <td><?php echo $row['publication'] ?></td>
      </tr>
      <?php
}
?>
  </table>
  </div>
        <div class ="fees">

<table width="80%" border="1">
  <tr>
  <th colspan="4">fees payment</th>
  </tr>
  <tr>
<td>class</td>
<td>Date</td>
<td>Details</td>	<td>credit</td>

  <td>Debit</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM fees");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['class'] ?></td>
  <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['details'] ?></td>
      <td><?php echo $row['amountdr'] ?></td>
      <td><?php echo $row['amountcr'] ?></td>
      </tr>
      <?php
}
?>
  </table>
</div>
<div class ="results">

<table width="80%" border="1">
  <tr>
  <th colspan="4">Results</th>
  </tr>
  <tr>
<td>Year</td>
<td>Subject</td>
<td>Credit</td>
  <td>Position <br>out of 40</td>
<td>Comments</td>
<td></td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM resuls");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['year'] ?></td>
  <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['credit'] ?></td>
      <td><?php echo $row['pos'] ?></td>
  <td><?php echo $row['comment'] ?></td>
      </tr>
      <?php
}
?>
  </table>

</div>
  </div>
  </div>
@section('sidesharp')

@endsection
@section('footer')

@endsection
=======
@extends('layouts.app')

<div class="coverpad"></div>
<div class="coverpadz"><img src="" width="850px" /></div>

<div class="profilepic"></div>
<div class="profilepicz"><img src = "" height="140px" /></div>


  <div class="username">Gabz <br>Tatenda</div>
<div class="box12">Fees</div>
<div class="box13">Results</div>
<div class="box14">Class</div>
  <select>
    <option selected>Subjects</option>
    <option value="tr">Teachers</option>
    <option value="submat">Materials</option>
  </select>

<table width="80%" border="1">
  <tr>
  <th colspan="4">Subjects</th>
  </tr>
  <tr>
<td>Subject Code</td>
<td>Subject Name</td>
  <td>Learning Materials</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM classes");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['className'] ?></td>
      <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['TeacherName'] ?></td>
      <td><?php echo $row['passrate'] ?></td>
      <td><a href="includes/" target="_blank">view</a></td>
      </tr>
      <?php
}
?>

  </table>

<table width="80%" border="1">
  <tr>
  <th colspan="4">Teachers</th>
  </tr>
  <tr>
<td>Subject Name</td>
  <td>Teacher Name</td>
  <td>Pass Rate</td>
  <td>Publications</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM teachers");

while($row=$sql->fetch_assoc()){
?>
      <tr>
      <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['TeacherName'] ?></td>
      <td><?php echo $row['passrate'] ?></td>
  <td><?php echo $row['publication'] ?></td>
      </tr>
      <?php
}
?>
  </table>
  </div>
        <div class ="fees">

<table width="80%" border="1">
  <tr>
  <th colspan="4">fees payment</th>
  </tr>
  <tr>
<td>class</td>
<td>Date</td>
<td>Details</td>	<td>credit</td>

  <td>Debit</td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM fees");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['class'] ?></td>
  <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['details'] ?></td>
      <td><?php echo $row['amountdr'] ?></td>
      <td><?php echo $row['amountcr'] ?></td>
      </tr>
      <?php
}
?>
  </table>
</div>
<div class ="results">

<table width="80%" border="1">
  <tr>
  <th colspan="4">Results</th>
  </tr>
  <tr>
<td>Year</td>
<td>Subject</td>
<td>Credit</td>
  <td>Position <br>out of 40</td>
<td>Comments</td>
<td></td>
  </tr>

 <?php
$sql=mysqli_query($conn, "SELECT * FROM resuls");

while($row=$sql->fetch_assoc()){
?>
      <tr>
  <td><?php echo $row['year'] ?></td>
  <td><?php echo $row['subjectName'] ?></td>
      <td><?php echo $row['credit'] ?></td>
      <td><?php echo $row['pos'] ?></td>
  <td><?php echo $row['comment'] ?></td>
      </tr>
      <?php
}
?>
  </table>

</div>
  </div>
  </div>
@section('sidesharp')

@endsection
@section('footer')

@endsection
>>>>>>> First commit
