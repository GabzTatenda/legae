<?php
session_start();
require_once('includes/data.php');
include('../library.php');

$issuedNo= (int)$_GET['issuedNo'];

$sql = mysqli_query($conn, "SELECT * FROM student WHERE st_id = $issuedNo");

while($row=$sql->fetch_assoc())
	{
extract($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Admin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Options
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Logged In As Zindoga </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
	<div class="wrapper">
        <div class="container">
            <div class="row">
				<?php include('includes/sidebar.php');?>
				<div class="span9">
                  <div class="content">	

  <br >
  <table border="0" align="center" width="98%">&nbsp;
  <br >
    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Student Control Centre </strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%" style="margin-left:100px;"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>



            <td width="45%"><div align="left" class="style3">
			<h1>ISSUERER</h1>
			<?php
				echo "<img src='$SERVER_PATH/images/stPhotos/$photo' width=304 height=236 >";
			?>
			

            </div></td>

          </tr>

          &nbsp;<tr>

            <td><div align="left" class="style3">Name : </div></td>

            <td><div align="left" class="style3">
              
			  <?php echo $Name; ?>

             
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Registration Number : </div></td>

            <td><div align="left" class="style3">

              <?php echo $regnum; ?>

			
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>
<h1>Current Class</h1>
			<?php
				echo "<img src='$SERVER_PATH/images/stPhotos/$photo' width=304 height=236 >";
			?>
            <td width="45%" class="style3"><div align="left"></div></td>

          </tr>

          &nbsp;<tr>

            <td class="style3"><div align="left">Name : </div></td>

            <td class="style3"><div align="left">
			<?php echo $classname; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Level : </div></td>

            <td class="style3"><div align="left">
			<?php echo $level; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Serial No  : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $serialNo; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Specification of Tablet  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $specs; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">IMEI :</td>

      <td class="style3" bgcolor="#FFFFFF">

				<?php echo $IMEI; ?>

	 </td>
    </tr>
	
    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Date and Time Issued :</td> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $datetime; ?>

        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td> 
    </tr> 

  </tbody></table> 

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

  <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%" style="margin-left:100px;">

    <tbody><tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">New Status: </td>

      <td class="Partext1" bgcolor="#FFFFFF" width="26%">

<select name="status">

<option value="Issued">Issued</option>

<option value="Lost">Lost</option>

<option value="damaged">Damaged</option>

<option value="Completed">Returned</option>

</select>

<br></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="58%"><div align="center">
	  <a href="process.php?action=Returned&issuedNo=<?php echo $issuedNo; ?>">Marked this tablet as to be <span class="style1">Returned </span></a><span class="style1"></span></div></td>
    </tr>


    

    <tr>

      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

       <input name="submit" value="UPDATE" type="submit">

          <input name="issuedNo" id="issuedNo" value="<?php echo $issuedNo; ?>" type="hidden">

          <input name="serialNo" id="serialNo" value="<?php echo $serialNo; ?>" type="hidden">      </td>
    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form>    </td>

  </tr>

</tbody></table>





</body></html>
<?php } 
?>
</div>
						</div>
				 </div>
				 </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
<?php include('includes/footer.php');?>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>