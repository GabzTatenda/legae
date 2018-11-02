<?php
session_start();
include("includes/data.php");
if (isset($_POST['submit']))
    {
    $Fname = $_POST["Fnames"];
    $Lname = $_POST["Lname"];
    $gender = $_POST["gender"];
    $NxtFnamez = $_POST["NxtFname"];
    $NxtLname = $_POST["NxtLname"];
    $street = $_POST["street"];
    $zip = $_POST["zip"];
    $city = $_POST["city"];
    $pass = $_POST["pass"];
    $email = $_POST["mail"];

    $a = regNumber();
    $_SESSION["random"] =$a;

    addData($a, $Fname, $Lname, $NxtFnamez, $NxtLname,$gender, $street,$city,$zip,$contact,$email,$pass);
}
function addData($a, $Fname, $Lname, $NxtFnamez, $NxtLname,$gender, $street,$city,$zip,$contact,$email,$pass)

   {    
    $addst=$conn->query("INSERT INTO `student` (`st_id`, `regNum`, `st_name`, `st_lname`, `st_father`, `st_lfather`,`st_gender`, `st_add`,  `city`, `zip`, `cont_num`, `email`, `pass`)
    VALUES(null,'$a', '$Fname', '$Lname', '$NxtFnamez', '$NxtLname','$gender', '$street','$city', '$zip', '$contact', '$email', '$pass')");
    
    print "Add data has been success";
} 
function regNumber()
{
    $num_of_ids = 1; //Number of "ids" to generate.
    $i = 1; //Loop counter.
    $n = 1; //"id" number piece.
    $l = "A18"; //"id" letter piece.
    
    while ($i <= $num_of_ids) { 
        $id = $l . sprintf("%04d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
        echo $id; //Print out the id.
    
        if ($n == 9999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
            $n = 0;
            $l++;
        }
    
        $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
    } 
}
print "Add data has been success";
}
    
function regNumber()
{
    $num_of_ids = 1; //Number of "ids" to generate.
    $i = 1; //Loop counter.
    $n = 1; //"id" number piece.
    $l = "A18"; //"id" letter piece.
    
    while ($i <= $num_of_ids) { 
        $id = $l . sprintf("%04d", $n); //Create "id". Sprintf pads the number to make it 4 digits.
        echo $id; //Print out the id.
    
        if ($n == 9999) { //Once the number reaches 9999, increase the letter by one and reset number to 0.
            $n = 0;
            $l++;
        }
    
        $i++; $n++; //Letters can be incremented the same as numbers. Adding 1 to "AAA" prints out "AAB".
    } 
}
    ?>
 <script>

        function submitForm() {
            _("regform").method = "post";
            _("regform").action = "mail.php";
            _("regform").submit();
        }
        function checkvalue(value){
    xmlHttp=GetXmlHttpObject()
    var url = "checkemail.php";
    url=url +"?emailid="+value;
    xmlHttp.onreadystatechange=sateChanged
    xmlHttp.open("GET",url,true)
    xmlHttp.send(null)
}
function stateChange(){
    if(xmlHttp.readyState == 4 xmlHttp.readyState=="complete"){
        var showdata = xmlHttp.responsiveText;
        document.getElementById("mydiv").innerHTML = showdata;
    }
}
function GetXmlHttpObject(){
    var xmlHttp=null;
    try{
        xmlHttp=new XMLHttpRequest();
    }
    catch(e){
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
}
return xmlHttp;
}

</script>