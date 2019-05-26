<?php
/**
 * matavimu redagavimo klasė
 *
 * @author ISK
 */
include 'utils/mysql.class.php';

class matavimas {
	
	private $matavimai_lentele = '';
	
	public function __construct() {
		$this->matavimai_lentele = 'matavimai';
	}


	
	/**
	 * Matavimo įrašymas
	 * @param type $data
	 */
	public function insertMat($parse) {

        $datetime = date('Y-m-d H:i:s');
 
		$query = "  INSERT INTO `{$this->matavimai_lentele}`
								(
									`Laikas`,
									`Temperatura`,
									`Slegis`,
									`Sviesa`,
									`Dregnis`, 
									`id_MATAVIMAI`, 
									`fk_PRIETAISASid_PRIETAISAS`
								)
								VALUES
								(
									now(),
									$parse->Temperature1,
								    $parse->Presure,
									$parse->Ligth,
									$parse->Humidity,
									00 ,
									$parse->itemID
								)";
		echo $query;

		mysql::query($query);
	}
	
	public function getMatavimai($data){
	    
	    $query = "SELECT `Temperatura`,`Slegis`,`Dregnis`,`Sviesa`, `Laikas` FROM `{$this->matavimai_lentele}` 
					WHERE Day(`Laikas`) >= (Day(Now()) - {$data->day}) 
					AND fk_PRIETAISASid_PRIETAISAS = {$data->id}
					AND MONTH(`Laikas`) = MONTH(Now())";
					
					echo $query;
	    $mat = mysql::select($query);
		
		return $mat[0];
	    
	}
	
	
}