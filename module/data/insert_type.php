<?php 
require_once('../class/Laundry.php');
if(isset($_POST['type'])){
	$type = $_POST['type'];
	$type = strtolower($type);
	$type = ucwords($type);
	
	$saveType = $laundry->insert_type($type);
	$return['valid'] = false;
	if($saveType){
		$return['valid'] = true;
		$return['msg'] = 'Type enregistré avec succès';
	}
	echo json_encode($return);

}//end isset

$laundry->Disconnect();