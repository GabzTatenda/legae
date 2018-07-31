
<?php
//include ("/includes/reghdr.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reg Form</title>
    <link rel="stylesheet" href="styles/regformStyle.css">
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
			_("phase4").style.display = "block";

        }
		        function processphase4() 
				{
					email = _("mail").value;
					
			_("phase4").style.display = "none";
            _("showData").style.display = "block";

            _("display_Fname").innerHTML = Fname;
            _("display_Lname").innerHTML = Lname;
            _("display_gender").innerHTML = gender;
            _("display_street").innerHTML = street;
            _("display_city").innerHTML = city;
            _("display_NxtFnamez").innerHTML = NxtFnamez;
            _("display_occup").innerHTML = occup;
            _("display_phone").innerHTML = phone;
			_("display_email").innerHTML = email;


				}
        function submitform(){
            _("regform").method = "post";
            _("regform").action = "myparser.php";
            _("regform").submit();

        }

        </script>
</head>

<body>

    <form id="regform" onsubmit="return false">
        <!-- progress bar -->
        <ul id="progressbar">
            <li class="active">Personal Details</li>
            <li>Parents/Next of Kin Details</li>
            <li>Address</li>
            <li>email </li>
        </ul>

        <div id="phase1">
            <h2 class="fs-title">Creating Your Elearning Account</h2>
            <h3 class="fs-subtitle">1st step put your personal details</h3>
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
            <h2 class="fs-title">Creating Your Elearning Account</h2>
            <h3 class="fs-subtitle">2nd step put your next of kin's details</h3>
           <span>FullName for Next of kin</span> <input type="text" name="NxtFname" id="NxtFname" placeholder="First Name" />
           <span>Occupation for Next of kin</span> <input type="text" name="occup" id="occup" placeholder="e.g.Carpenter" />
            <span>Phone Number</span><input type="text" name="phone" id="phone" placeholder="Contact Number" />

            <button onclick="processphase2()">Continue</button>
        </div>
        <div id="phase3">
            <h2 class="fs-title">Creating Your Elearning Account</h2>
            <h3 class="fs-subtitle">3rd step put your physical address</h3>
            <span>Address</span><input type="text" name="street" id="street" placeholder="e.g.Plot 33 mogoditshane" />
            <span>D.O.B</span><input type="date" name="dob" id="dob" />
            <span>City</span><input type="text" name="city" id="city" placeholder="Gaborone" />
            <button onclick="processphase3()">Continue</button>
        </div>
		<div id="phase4">
            <h2 class="fs-title">Creating Your Elearning Account</h2>
            <h3 class="fs-subtitle">Final step:Email and Credentials</h3>
			<span>Email</span><input type="email" name="mail" onkeyup="check(this.value);" id="mail" placeholder="youremail@domain.com" />
              <span>Enter Password</span><input type="password" name="password" id="user-password" />
			<span>Re-enter Password</span><input type="password" name="confirm-password" id="confirm-password"/>
			 <button onclick="processphase4()">Continue</button>

	</div>
        <div id="showData">
            <h2 class="fs-title">PERSONAL DETAILS</h2> first name:<span id="display_Fname"></span><br> Surname: <span id="display_Lname"></span>
            <br> gender: <span id="display_gender"></span><br>
            <h2 class="fs-title">NEXT OF KIN DETAILS</h2> full name:<span id="display_NxtFnamez"></span> <br>
			Occupation:
            <span id="display_occup"></span><br> phone:
            <span id="display_phone"></span> <br> address: <span id="display_street"></span>
            <span id="display_city"></span>
			<h2 class="fs-title">Email DETAILS</h2>
			<br> email : <span id="display_email"></span>
			
            <input type="submit" value="Submit" onclick="submitform()" name="submitbtn">
        </div>
    </form>
<p id ="result"></p>
</body>

</html>