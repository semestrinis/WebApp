<?php

class userProfile
{
    private $user_table = '';
	private $userDevice_table = '';
	private $Device_table = '';
	
	public function __construct() 
	{
		$this->user_table = config::DB_PREFIX . 'vartotojas';
		$this->userDevice_table = config::DB_PREFIX . 'vartotojas_prietaisas';
		$this->Device_table = config::DB_PREFIX . 'matavimai';
	}
	
	public function getData($id)
	{
		$query = "  SELECT `{$this->user_table}`.Email, 
						   `{$this->user_table}`.FirstName,
						   `{$this->user_table}`.LastName,
					FROM`{$this->user_table}`
					WHERE `{$this->user_table}`.Username = `$_SESSION[''],
						  `{$this->user_table}`.id_VARTOTOJAS = `$_SESSION['']";
		echo $query;

		mysql::query($query);
	}
}

?>