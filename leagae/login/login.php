<html>
	<head>
	<title>LOGIN PAGE</title>
	<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<style>
body{
background:#eee;

}

#frm1{
border:solid gray 1px;
width:20%;
border-radius: 5px;
margin:100px auto;
background: white;
padding: 50px;
}
#okbtn{
	
color: #fff;
background:#337ab7;
padding: 5px:
margin-left: 69%;
}
#cancelbtn{
	
color: #fff;
background:#337ab7;
padding: 5px:

}
	</style><script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.user.value == "")
     {
        alert("Please enter Regitsration Number.");
        document.form1.user.focus();
        return false;
     }
   if(document.form1.pass.value == "")
     {
        alert("Please enter Password.");
        document.form1.pass.focus();
        return false;
     }
   }

//-->
</script>
		<body>
			<div id="frm1">
				<form action="function.php" method="POST" name="form1" onSubmit="return memloginvalidate()">
				<h1>Admin Access <br>ENTER CREDENTIALS</h1>
				<a href="../index.html">Click here to go back to Leagae System</a>
						<p>
					<input type ="text" id="user" name="user" placeholder="Regitsration Number">
						</p>
						<p>
					<input type ="password" id="pass" name="pass" placeholder="password">
						</p>
				<input type ="submit" id="okbtn" name="okbtn" value="OK">
				<input type ="submit" id="cancelbtn" name="cancelbtn" value="CANCEL">
				<br /><br />
				
				</form>
			</div>
		</body>
	
</html>
