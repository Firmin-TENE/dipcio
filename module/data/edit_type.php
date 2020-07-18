<?php 
require_once('../class/Laundry.php');
if(isset($_POST['type_id'])){
	$type_id = $_POST['type_id'];
	$type = $_POST['type'];
	$type = strtolower($type);
	$type = ucwords($type);

	$saveChanges = $laundry->edit_type($type_id, $type);
	$return['valid'] = false;
	if($saveChanges){
		$return['valid'] = true;
		$return['msg'] = 'Type édité avec succès!';
	} 

	echo json_encode($return);
}//end isset
$laundry->Disconnect();