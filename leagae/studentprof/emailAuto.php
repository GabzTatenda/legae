<<<<<<< HEAD
<?
ob_start();
if(isset($_POST['btnSubmit']))
{
require("class.phpmailer.php");


///autoreply via email
<?php
$mail = new PHPMailer();

//Your SMTP servers details

$mail->IsSMTP();               // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server or localhost
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "hello@frogdigital.co.uk";  // SMTP username
$mail->Password = "*****"; // SMTP password
//It should be same as that of the SMTP user

$redirect_url = "http://".$_SERVER['SERVER_NAME']; //Redirect URL after submit the form

$mail->From = $mail->hello;	//Default From email same as smtp user
$mail->FromName = $_POST['fullname'];

$mail->AddAddress("hello@frogdigital.co.uk", "Frog Digital"); //Email address where you wish to receive/collect those emails.

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $_POST['service'];

$message = "<b>Name: </b>".$_POST['fullname']." \r\n <br><br><b>Email: </b>".$_POST['email']." \r\n <br><br><b>Service: </b>".$_POST['service']." \r\n <br><br><b>Budget: </b>".$_POST['budget']." \r\n <br><br><b>Comments: </b>".$_POST['comments'];
$mail->Body    = $message;


if ($mail->send()){
  $autoemail = new PHPMailer();
  $autoemail->From = "hello@frogdigital.co.uk";
  $autoemail->FromName = "Frog Digital";
  $autoemail->AddAddress($mail->From, $mail->FromName);
  $autoemail->Subject = "Autorepsonse: We received your submission";
  $autoemail->Body = "We received your submission. We will contact you soon ...";
  
   $autoemail->Send(); 
}
?>




=======
<?
ob_start();
if(isset($_POST['btnSubmit']))
{
require("class.phpmailer.php");


///autoreply via email
<?php
$mail = new PHPMailer();

//Your SMTP servers details

$mail->IsSMTP();               // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server or localhost
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "hello@frogdigital.co.uk";  // SMTP username
$mail->Password = "*****"; // SMTP password
//It should be same as that of the SMTP user

$redirect_url = "http://".$_SERVER['SERVER_NAME']; //Redirect URL after submit the form

$mail->From = $mail->hello;	//Default From email same as smtp user
$mail->FromName = $_POST['fullname'];

$mail->AddAddress("hello@frogdigital.co.uk", "Frog Digital"); //Email address where you wish to receive/collect those emails.

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $_POST['service'];

$message = "<b>Name: </b>".$_POST['fullname']." \r\n <br><br><b>Email: </b>".$_POST['email']." \r\n <br><br><b>Service: </b>".$_POST['service']." \r\n <br><br><b>Budget: </b>".$_POST['budget']." \r\n <br><br><b>Comments: </b>".$_POST['comments'];
$mail->Body    = $message;


if ($mail->send()){
  $autoemail = new PHPMailer();
  $autoemail->From = "hello@frogdigital.co.uk";
  $autoemail->FromName = "Frog Digital";
  $autoemail->AddAddress($mail->From, $mail->FromName);
  $autoemail->Subject = "Autorepsonse: We received your submission";
  $autoemail->Body = "We received your submission. We will contact you soon ...";
  
   $autoemail->Send(); 
}
?>




>>>>>>> First commit
?>