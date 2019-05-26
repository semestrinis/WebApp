
<?php
	session_start();

	if($_SESSION['Uname'] == '')
	{
		echo("<header class='masthead bg-primary text-white text-center'>
			<div class='container'>
				<h1 class='text-uppercase mb-0'>Sveiki</h1>
				<h2>Tai yra aplinkos oro stebėjimo stotelės informacinė sistema</h2>
				<h3>Spauskite 'Prisijungimas' norėdami matyti savo aplinkos oro matavimų paskyrą, o jei neturite paskyros, tiesiog galėtumėte užsiregistruoti</h3>
			</div>
		</header>");
	}
	else
	{
		echo("<header class='masthead bg-primary text-white text-center'>
			<div class='container'>
				<h3>Sveikiname prisijungus prie \"Oro stebėjimo sistemos\"</h3>
			</div>
		</header>");
	}
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>