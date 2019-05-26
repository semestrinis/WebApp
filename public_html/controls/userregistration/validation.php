<?php

//include 'utils/mysql.class.php';
session_start();
define("DB_SERVER", "localhost");
define("DB_USER", "id9004481_root");
define("DB_PASSWORD", "EBp6YVzHC3GFxp5");
define("DB_DATABASE", "id9004481_orai");
 
// $con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);


$con = mysqli_connect('localhost', 'id9004481_root', 'EBp6YVzHC3GFxp5');

mysqli_select_db($con, 'id9004481_orai');

$name = $_POST['user'];
$pass = $_POST['password'];
//$email = $_POST['Email'];
//$fname = $_POST['FirstName'];
//$lname = $_POST['LastName'];
//$dbId = $_POST['id_VARTOTOJAS'];

$s = " SELECT * FROM vartotojas WHERE Username = '$name' AND Slaptazodis = '$pass'";
//echo $s;
$check = mysqli_query($con, $s);
//$UserData = mysqli_query($con, " select * from vartotojas where Username = '$name' AND Slaptazodis = '$pass'");
//echo "1111111asdsadsadas";
//$UserData = mysql::select($s);
//$UserData = mysql::select($s);
$userData = mysqli_fetch_assoc($check);
$id = $userData['id_VARTOTOJAS'];
$ss = "SELECT fk_PRIETAISASid_PRIETAISAS FROM vartotojas_prietaisas WHERE '$id' = fk_VARTOTOJASid_VARTOTOJAS";
$check1 = mysqli_query($con, $ss);
$stationData = mysqli_fetch_assoc($check1);
// echo "asdasd: " ;
// echo $stationData['fk_PRIETAISASid_PRIETAISAS'];
// echo "asdasd: " ;
// echo "22222222asdsadsadas";
//echo $userData['Email'];
//echo "33333333asdsadsadas";
//$insert = " INSERT INTO `vartotojas` (`Username`, `Slaptazodis`, `Email`, `FirstName`, `LastName`, `id_VARTOTOJAS`) VALUES ('$name', '$pass', '$email', '$fname', '$lname', NULL);";

//$result = mysqli_query($con, $insert);

$num = mysqli_num_rows($check);

if ($num == 1)
{
	//$email_qerry = "SELECT vartotojas.Email FROM vartotojas WHERE vartotojas.Username = '$name' && vartotojas.Slaptazodis = '$pass'";
	//$email = mysqli_query($con, $email_qerry);
	
	$_SESSION["Uname"] = $name;
	$_SESSION["Email"] = $userData['Email'];
	$_SESSION["FirstName"] = $userData['FirstName'];
	$_SESSION["LastName"] = $userData['LastName'];
	$_SESSION["UID"] = $id;
	$_SESSION["SID"] = $stationData['fk_PRIETAISASid_PRIETAISAS'];
	//$_SESSION["password"] = $pass;
	//$_SESSION["s"] = $check;
	//$_SESSION["TestVar"] = "TEST";
	
	header('location: /index.php?module=graphs&action=display');
	exit();
}
else{
	header('location: login.php?prisijungimas=blogas');
	exit();
}

?>