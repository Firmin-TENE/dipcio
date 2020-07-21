<?php 
require_once('../../bd.php');
if(isset($_POST['def'])){
	$def = $_POST['def']; 
	$mot = $_POST['mot']; 
	
	$return['valid'] = false;

	try {
		add_to_lexique($mot, $def);
		$return['valid'] = true;
	} catch (Exception $e) {
		$return['valid'] = false;
	}

	echo json_encode($return);
}//end isset
