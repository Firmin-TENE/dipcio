<?php 
require_once('../class/Laundry.php');
if(isset($_POST['docID'])){
	$classeur = $_POST['priority']; //classeur
	$qte = $_POST['weight'];   //qte
	$type = $_POST['type'];    //type de doc
	$docID = $_POST['docID'];
	

	$updateRecord = $laundry->edit_dir($docID, $classeur, $qte, $type);
	$return['valid'] = false;
	if($updateRecord){
		$return['valid'] = true;
		$return['msg'] = 'Dossier édité avec succès !';
	}
	echo json_encode($return);
}//end isset
$laundry->Disconnect();