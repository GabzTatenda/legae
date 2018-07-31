<?php 
session_start();
include("data1.php");
if($_POST['Fnames'])
{


		$Fname = $_POST["Fnames"];
		$Lname = $_POST["Lname"];
		$gender = $_POST["gender"];
		$NxtFnamez = $_POST["NxtFname"];
		$occ = $_POST["occup"];
		$street = $_POST["street"];
		$zip = $_POST["zip"];
		$city = $_POST["city"];
		$contact = $_POST["phone"];
		$date = date("Y-m-d H:i:s");
		
		$email= $_POST["mail"];
		$pass = $_POST["pass"];
		$gender = $_POST["gender"];

			
	$sql1=mysqli_query($conn,"INSERT INTO student VALUES(null, '$Fname', '$Lname','$NxtFnamez',
						'$gender','$stree','$dob','$city', '$contact', '$date')");
	$sql=mysqli_query($conn, "INSERT INTO studentcr VALUES(null, '$regnum','$pass', '$email')");
	
	
        $subject = "Online Application from. $Fname. $Lname. through our website";
$body = <<<EOD
       
        <table cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Name: </td>
                    <td style="padding: 5px 10px;">$nfrm_name</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Mobile: </td>
                    <td style="padding: 5px 10px;">$nfrm_mobile</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Email: </td>
                    <td style="padding: 5px 10px;">$nfrm_email</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Message: </td>
                    <td style="padding: 5px 10px;">$nfrm_message</td>
                </tr>
            </tbody>
        </table>
       
EOD;
   
        $headers = "From: www.legaeacademy.co.bw\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset="iso-8859-1"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
       
        mail($email, $subject, $body, $headers );
        echo "<h4>Thank you for sending us an enquiry. We will get back to you.</h4>";
       
	print "Add data has been success";
	
		}
		else
		{
			echo "no data sent";
			header('location:regform1.php');
		};

?>
