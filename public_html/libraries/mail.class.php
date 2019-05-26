<?php
class mailer
{
    private $markes_lentele = '';
	
	public function __construct() {
		$this->vartotojai_lentele = config::DB_PREFIX . 'vartotojas';
		
	}
	
	public function testMail($subjectEmail)
	{
		$to = $subjectEmail;
		$subject = "Oru stebejimo stoteles Testinis pranesimas";

		$message = "
		<html>
		<head>
		<title>Oru stebejimo stoteles pranesimas</title>
		</head>
		<body>
		<p>Dabartine oro temperatura: 23C</p>
		<p>Dabartinis slegis: 750kPa</p>
		<i>Kadangi siuo metu slegis zemas - didele krituliu tikimybe</i>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <webmaster@orostebejimas.000webhostapp.com>' . "\r\n";
		$headers .= 'Cc: $subjectEmail' . "\r\n";

		mail($to,$subject,$message,$headers);

		//echo "Mail sent";
	}

	public function RegistrationConfirmationMail($subjectEmail)
	{
		$to = $subjectEmail;
		$subject = "Oru stebejimo stoteles Registracijos patvirtinimas";

		$message = "
		<html>
		<head>
		<title>Oru stebejimo stoteles pranesimas</title>
		</head>
		<body>
		<p>Dabartine oro temperatura: 23C</p>
		<p>Dabartinis slegis: 750kPa</p>
		<i>Kadangi siuo metu slegis zemas - didele krituliu tikimybe</i>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <webmaster@orostebejimas.000webhostapp.com>' . "\r\n";
		$headers .= 'Cc: $subjectEmail' . "\r\n";

		mail($to,$subject,$message,$headers);
	}
	public function RegistrationConfirmationAction($data)
	{
		$query = "  SELECT `{$this->vartotojai_lentele}`.`Confirmation_status`
					FROM `{$this->vartotojai_lentele}`
					WHERE `{$this->vartotojai_lentele}`.`id_VARTOTOJAS` = $data[Confirmation_ID]`";
						
		$data_Retun1 = mysql::select($query);
		
		if($data_Retun1 == 1)
		{
			$query = "  UPDATE `{$this->vartotojai_lentele}`
					SET `{$this->vartotojai_lentele}`.`Confirmation_status` = '0' 
					WHERE `{$this->vartotojai_lentele}`.`id_VARTOTOJAS` = $data[Confirmation_ID]`";
					
						
			$data_Retun1 = mysql::select($query);
			
			echo "m_success";
		}
		
		//header(
		
		//UPDATE `vartotojas` SET `Confirmation_status` = '0' WHERE `vartotojas`.`id_VARTOTOJAS` = 20;
		//SELECT vartotojas.Confirmation_status FROM vartotojas WHERE vartotojas.id_VARTOTOJAS = 2
		//$data['Confirmation_ID']
		
	}
}
?>