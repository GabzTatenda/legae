<?php
session_start();
include("data.php");
$sql = mysqli_query($conn, "SELECT * FROM student");
		
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
&nbsp;

<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>Update </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit</div></td>
      <td class="newtext" bgcolor="#EDEDED" width="6%">No. </td>
	  <td class="newtext" bgcolor="#EDEDED" width="11%">Regitsration Number</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Name</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Surname</td>
	  <td class="newtext" bgcolor="#EDEDED" width="25%">address</td>
	  <td class="newtext" bgcolor="#EDEDED" width="11%">gender</td>



    </tr>

						<?php

									
						  	while($row=$sql->fetch_assoc()){	
					?>	
	          <tr onMouseOver="this.bgColor='pink';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
          
          <td class="gentxt" align="center">
          <a href="stdntmanage.php?issuedNo=<?php $issuedNo=$row['st_id']; echo $issuedNo; ?>">
          <img src="../images/designfloat.png" border="0" height="20" width="20"></a>
          </td>

						<td><?=$row['st_id']?></td>
						<td><?=$row['regNum']?></td>
						 <td><?=$row['name']?></td>
						 <td><?=$row['surname']?></td>
						 <td><?=$row['address']?></td>
						 <td><?=$row['gender']?></td>
						 

						 
					</tr>
					<?php
				}
					?>
	  </tbody></table>
  <br>
    </td>
  </tr>
</tbody></table>
