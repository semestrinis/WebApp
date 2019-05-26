<?php
include 'libraries/matavimas.class.php';
$matObj = new matavimas();
if ($_POST['appData']){
$appData = $_POST['appData'];
//$appData = '{"itemID":"56654","Temperature1":26.10,"Humidity":21.60,"Presure":101804.00,"Temperature2":26.30,"Ligth":353}';


$parse = json_decode($appData);



//$data = array(
//Laikas` => date("M,d,Y h:i:s A"),
//    `Temperatura` => $parse->Temperature1,
//    `Slegis` => $parse->Presure,
//    `Sviesa` => $parse->Ligth,
//    `Dregnis` => $parse->Humidity,
 //   `id_MATAVIMAI` => 000,
//    `fk_PRIETAISASid_PRIETAISAS` => $parse->itemID
//);

$matObj->insertMat($parse);
}