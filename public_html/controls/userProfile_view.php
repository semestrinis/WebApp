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
	//include 'libraries/userProfile.class.php';
	//$userObj = new userProfile();

	//$formErrors = null;
	//$data = array();

	// nustatome privalomus laukus
	//$required = array('Uname', 'name', 'Lname', 'SID');

	// maksimalūs leidžiami laukų ilgiai
	/*$maxLengths = array (
		'Uname' => 32,
		'name' => 32,
		'Lname' => 32,
		'SID' => 20 
	);
	
	// paspaustas išsaugojimo mygtukas
	if(!empty($_POST['submit'])) 
	{
		include 'utils/validator.class.php';
		// nustatome laukų validatorių tipus
		$validations = array (
			'Uname' => 'alfanum',
			'name' => 'alfanum',
			'Lname' => 'alfanum',
			'SID' => 'alfanum'
			);

		// sukuriame validatoriaus objektą
		
		$validator = new validator($validations, $required, $maxLengths);

		if($validator->validate($_POST)) 
		{
			// suformuojame laukų reikšmių masyvą SQL užklausai
			$dataPrepared = $validator->preparePostFieldsForSQL();

			// atnaujiname duomenis
			$userObj->RegistrationConfirmation($dataPrepared);

			// nukreipiame į markių puslapį
			//header("Location: index.php?module={$module}&action=list");
			//die();
		} */
		/*else 
		{
			// gauname klaidų pranešimą
			$formErrors = $validator->getErrorHTML();
			// gauname įvestus laukus
			$data = $_POST;
		}
	} 
	else 
	{
		// išrenkame elemento duomenis ir jais užpildome formos laukus.
		//$data = $userObj->getBrand($id);
	}*/
	
	 
	
	
	
	
	include 'templates/userProfile_view.tpl.php';
	
}
?>