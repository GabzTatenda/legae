<!DOCTYPE html>

<html>

<head>
    <title>LEGAE E-Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link href="layout/styles/stprof.css" rel="stylesheet" type="text/css" media="all">
	<script src="layout/scripts/jquery.js"></script>
	<script >
	$(document).ready(function(){
		$(".box12").click(function(){
			$(".box12").css('background-color','#e9f0f2');
			$(".box13").css('background-color','white');
			$(".box14").css('background-color','white');
				$(".fees").fadeIn("slow");
					$(".class_sub").fadeOut("slow");
					$(".course_wrk").fadeOut("slow");
		});	
		$(".box13").click(function(){
			$(".box13").css('background-color','#e9f0f2');
			$(".box12").css('background-color','white');
			$(".box14").css('background-color','white');
				$(".results").fadeIn("slow");
					$(".class_sub").fadeOut("slow");
					$(".course_wrk").fadeOut("slow");
					$(".fees").fadeOut("slow");		
		});
		$(".box14").click(function(){
			$(".box14").css('background-color','#e9f0f2');
			$(".box12").css('background-color','white');
			$(".box13").css('background-color','white');
				$(".class_sub").fadeIn("slow");
				$(".course_wrk").fadeIn("slow");
					$(".fees").fadeOut("slow");
					$(".results").fadeOut("slow");	
		});		
	
	$(".box13").click(function(){});
	
	});
	</script>
</head>

<body id="top">

    <div class="wrapper row0">
        <div id="topbar" class="clear">
            <!-- ################################################################################################ -->
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
					<li><a href="#">About Legae</a></li>
                    <li><a href="../slogin/login.php">Log Out</a></li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
        </div>
    </div>

    <div class="wrapper row1">
        <header id="header" class="clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="index.html">LEGAE ELEARNING</a></h1>
                <p>System</p>
            </div>
            <div class="fl_right">
                <form class="clear" method="post" action="#">
                    <fieldset>
                        <legend>Search:</legend>
                        <input type="text" value="" placeholder="Search Here" id ="searchbox">
                        <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
                    </fieldset>
                </form>
            </div>
            <!-- ################################################################################################ -->
        </header>
    </div>
	
    <div class="wrapper">
        <div id="slider">
            <div id="slide-wrapper" class="rounded clear">
                <!-- ################################################################################################ -->
               
                <ul id="slide-tabs">
                    <li><a href="#slide-1">All About The Academy</a></li>
                    <li><a href="#slide-2">Why You Should Study With Us</a></li>
                    <li><a href="#slide-3">Education And student Experience</a></li>
                    <li><a href="#slide-4">Alumni And Its Donors</a></li>
                    <li><a href="#slide-5">Latest Academy News &amp; Events</a></li>
                </ul>

				<figure id="slide-1">
                    <a class="view" href="#"><img src="images/demo/slider/1.jpg" alt=""></a>
                    <figcaption>
										 <h2>Our Motto</h2>
                        <p>The academy’s Setswana motto "Thuto go aga Botho" roughly translates to "Education builds Humanity". </p>
                        <p class="right"><a href="">Continue Reading &raquo;</a></p>
                    </figcaption>
                </figure>
		</div> 
	
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
		<div class ="sidesharp">

				<ul class="widget widget-usage unstyled span4">
									 <center><p> <strong>Course work </strong></p>
                                        <li>
                                            <p>
                                                <strong>Setswana </strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>English</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>History</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mathematics</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
										<li>
                                            <p>
                                                <strong>Geography</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
																				<li>
                                            <p>
                                                <strong>History</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>

				</ul>

	</div>
	<div class ="persona"></div>
	<div class ="persona1"></div>
	<div class ="persona2"></div>
	<div class ="persona3"></div>
	<div class ="persona4"></div>
	<div class ="persona5"></div>
    <!-- ################################################################################################ -->
  
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="clear">
            <!-- ################################################################################################ -->


            <!-- ################################################################################################ -->
        </div>
    </div>
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.fitvids.min.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>

</html>                                                                                                                                     