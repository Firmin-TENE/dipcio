<?php 
require_once('../../bd.php');
if(isset($_POST['id'])){
	$id = $_POST['id']; 
	
	$return['valid'] = false;

	try {
		supprimer_lexique($id);
		$return['valid'] = true;
	} catch (Exception $e) {
		$return['valid'] = false;
	}

	echo json_encode($return);
}//end isset
