
<?php 

session_start();

if($_SESSION["Uname"] == "")
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Norint perziūrėti savo stotelės duomenis turite prisijungti');
    window.location.href='https://orostebejimas.000webhostapp.com/controls/userregistration/login.php';
    </script>");
	//header('location: https://orostebejimas.000webhostapp.com/controls/userregistration/login.php');
	die();
}
else
{
	include 'libraries/mat2.class.php';
	$matObj = new mat2();

	$time = $_GET['time'];

	if($time == null){
	$data->day = 0;
	}
	else $data->day = $time;


	$data->id = $_SESSION["SID"];

	$dataDabar = $matObj->getMatavimaiDabar($data);
	$dataMat = $matObj->getMatavimai($data);
	$dataVid = $matObj->getVidurkiai($data);

	include 'templates/graphs_display.tpl.php';
}
?>