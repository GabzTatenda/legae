<<<<<<< HEAD
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
		<link rel="stylesheet" href="../styles/regformStyle.css">
		
    <style>
        form#regform>#phase2,
        #phase3,
        #phase4,
        #showData {
            display: none;
        }
    </style>
   <script>
        var Fname, Lname, gender, phone, RegNo, courses;
        var NxtFnamez, NxtLname, Nxtocc, Nxtphone, Nxtemail;
        var street, zip, city;
        var email;

        function _(x) {
            return document.getElementById(x);
        }

        function processPhase1() {
            Fname = _("Fnames").value;
            Lname = _("Lname").value;
            gender = _("gender").value;
            _("phase1").style.display = "none";
            _("phase2").style.display = "block";

        }

        function processphase2() {
            NxtFnamez = _("NxtFname").value;
            occup = _("occup").value;
            phone = _("phone").value;

            _("phase2").style.display = "none";
            _("phase3").style.display = "block";
        }

        function processphase3() {
            street = _("street").value;
            dob = _("dob").value;
            city = _("city").value;

            _("phase3").style.display = "none";
			_("showData").style.display = "block";

            _("display_Fname").innerHTML = Fname;
            _("display_Lname").innerHTML = Lname;
            _("display_gender").innerHTML = gender;
            _("display_street").innerHTML = street;
            _("display_city").innerHTML = city;
            _("display_NxtFnamez").innerHTML = NxtFnamez;
            _("display_occup").innerHTML = occup;
            _("display_phone").innerHTML = phone;


				}
        function submitform(){
            _("regform").method = "post";
            _("regform").action = "Adminfunctions.php?action=add-stdetails";
            _("regform").submit();

        }

        </script>
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
        <!-- /navbar -->
		        <div class="wrapper">
            <div class="container">
                <div class="row">
				<?php include('includes/sidebar.php');?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
<body>

    <form id="regform" onsubmit="return false">
        <!-- progress bar -->
        <ul id="progressbar">
            <li class="active">Personal Details</li>
            <li>Parents/Next of Kin Details</li>
            <li>Address</li>
        </ul>

        <div id="phase1">
            <h3 class="fs-subtitle">Personal details</h3>
            <span>First names</span><input type="text" id="Fnames" name="Fnames" placeholder="First Name" />
            <span>Last name</span><input type="text" id="Lname" name="Lname" placeholder="Surname" />
            <span>Gender</span><select name="gender" id="gender">
                <option value="">choose your gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                </select>

            <button onclick="processPhase1 ()">Continue</button>
        </div>

        <div id="phase2">

            <h3 class="fs-subtitle">Next of kin's details</h3>
           <span>FullName for Next of kin</span> <input type="text" name="NxtFname" id="NxtFname" placeholder="First Name" />
           <span>Occupation for Next of kin</span> <input type="text" name="occup" id="occup" placeholder="e.g.Carpenter" />
            <span>Phone Number</span><input type="text" name="phone" id="phone" placeholder="Contact Number" />

            <button onclick="processphase2()">Continue</button>
        </div>
        <div id="phase3">

            <h3 class="fs-subtitle">Contact Details</h3>
            <span>Address</span><input type="text" name="street" id="street" placeholder="e.g.Plot 33 mogoditshane" />
            <span>D.O.B</span><input type="date" name="dob" id="dob" />
            <span>City</span><input type="text" name="city" id="city" placeholder="Gaborone" />
            <button onclick="processphase3()">Continue</button>
        </div>
        <div id="showData">
            <h2 class="fs-title">PERSONAL DETAILS</h2> first name:<span id="display_Fname"></span><br> Surname: <span id="display_Lname"></span>
            <br> gender: <span id="display_gender"></span><br>
            <h2 class="fs-title">NEXT OF KIN DETAILS</h2> full name:<span id="display_NxtFnamez"></span> <br>
			Occupation:
            <span id="display_occup"></span><br> phone:
            <span id="display_phone"></span> <br> address: <span id="display_street"></span>
            <span id="display_city"></span>
            <input type="submit" value="Submit" onclick="submitform()" name="submitbtn">
        </div>
    </form>
<p id ="result"></p>
</div>
						</div>
				 </div>
				 </div>
            
            <!--/.container-->
		</div>
    <!--/.wrapper-->

        </div>

      
    </body>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
=======
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
		<link rel="stylesheet" href="../styles/regformStyle.css">
		
    <style>
        form#regform>#phase2,
        #phase3,
        #phase4,
        #showData {
            display: none;
        }
    </style>
   <script>
        var Fname, Lname, gender, phone, RegNo, courses;
        var NxtFnamez, NxtLname, Nxtocc, Nxtphone, Nxtemail;
        var street, zip, city;
        var email;

        function _(x) {
            return document.getElementById(x);
        }

        function processPhase1() {
            Fname = _("Fnames").value;
            Lname = _("Lname").value;
            gender = _("gender").value;
            _("phase1").style.display = "none";
            _("phase2").style.display = "block";

        }

        function processphase2() {
            NxtFnamez = _("NxtFname").value;
            occup = _("occup").value;
            phone = _("phone").value;

            _("phase2").style.display = "none";
            _("phase3").style.display = "block";
        }

        function processphase3() {
            street = _("street").value;
            dob = _("dob").value;
            city = _("city").value;

            _("phase3").style.display = "none";
			_("showData").style.display = "block";

            _("display_Fname").innerHTML = Fname;
            _("display_Lname").innerHTML = Lname;
            _("display_gender").innerHTML = gender;
            _("display_street").innerHTML = street;
            _("display_city").innerHTML = city;
            _("display_NxtFnamez").innerHTML = NxtFnamez;
            _("display_occup").innerHTML = occup;
            _("display_phone").innerHTML = phone;


				}
        function submitform(){
            _("regform").method = "post";
            _("regform").action = "Adminfunctions.php?action=add-stdetails";
            _("regform").submit();

        }

        </script>
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
        <!-- /navbar -->
		        <div class="wrapper">
            <div class="container">
                <div class="row">
				<?php include('includes/sidebar.php');?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
<body>

    <form id="regform" onsubmit="return false">
        <!-- progress bar -->
        <ul id="progressbar">
            <li class="active">Personal Details</li>
            <li>Parents/Next of Kin Details</li>
            <li>Address</li>
        </ul>

        <div id="phase1">
            <h3 class="fs-subtitle">Personal details</h3>
            <span>First names</span><input type="text" id="Fnames" name="Fnames" placeholder="First Name" />
            <span>Last name</span><input type="text" id="Lname" name="Lname" placeholder="Surname" />
            <span>Gender</span><select name="gender" id="gender">
                <option value="">choose your gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                </select>

            <button onclick="processPhase1 ()">Continue</button>
        </div>

        <div id="phase2">

            <h3 class="fs-subtitle">Next of kin's details</h3>
           <span>FullName for Next of kin</span> <input type="text" name="NxtFname" id="NxtFname" placeholder="First Name" />
           <span>Occupation for Next of kin</span> <input type="text" name="occup" id="occup" placeholder="e.g.Carpenter" />
            <span>Phone Number</span><input type="text" name="phone" id="phone" placeholder="Contact Number" />

            <button onclick="processphase2()">Continue</button>
        </div>
        <div id="phase3">

            <h3 class="fs-subtitle">Contact Details</h3>
            <span>Address</span><input type="text" name="street" id="street" placeholder="e.g.Plot 33 mogoditshane" />
            <span>D.O.B</span><input type="date" name="dob" id="dob" />
            <span>City</span><input type="text" name="city" id="city" placeholder="Gaborone" />
            <button onclick="processphase3()">Continue</button>
        </div>
        <div id="showData">
            <h2 class="fs-title">PERSONAL DETAILS</h2> first name:<span id="display_Fname"></span><br> Surname: <span id="display_Lname"></span>
            <br> gender: <span id="display_gender"></span><br>
            <h2 class="fs-title">NEXT OF KIN DETAILS</h2> full name:<span id="display_NxtFnamez"></span> <br>
			Occupation:
            <span id="display_occup"></span><br> phone:
            <span id="display_phone"></span> <br> address: <span id="display_street"></span>
            <span id="display_city"></span>
            <input type="submit" value="Submit" onclick="submitform()" name="submitbtn">
        </div>
    </form>
<p id ="result"></p>
</div>
						</div>
				 </div>
				 </div>
            
            <!--/.container-->
		</div>
    <!--/.wrapper-->

        </div>

      
    </body>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
>>>>>>> First commit
</html>