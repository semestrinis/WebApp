<?php

session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "id9004481_root");
define("DB_PASSWORD", "EBp6YVzHC3GFxp5");
define("DB_DATABASE", "id9004481_orai");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);


//$con = mysqli_connect('localhost', 'id9004481_root', 'EBp6YVzHC3GFxp5');

mysqli_select_db($con, 'id9004481_orai');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['Email'];
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];

$s = "select * from vartotojas where Username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num > 0) 
{
	//header('location: login.php?registracija=nesekminga');
	//exit();
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registracija nesėkminga');
    window.location.href='https://orostebejimas.000webhostapp.com/controls/userregistration/login.php';
    </script>");
}
else
{
	$reg = " INSERT INTO `vartotojas` (`Username`, `Slaptazodis`, `Email`, `FirstName`, `LastName`, `id_VARTOTOJAS`) VALUES ('$name', '$pass', '$email', '$fname', '$lname', NULL);";
	mysqli_query($con, $reg);
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registracija sėkminga, galite prisijungti');
    window.location.href='https://orostebejimas.000webhostapp.com/controls/userregistration/login.php';
    </script>");
	//header('location: login.php');
	//echo " Registracija sėkminga ";
}

?>