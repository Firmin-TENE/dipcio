<?php 

include('bd.php');
if(isset($_POST['code'])){
	$code = $_POST['code'];
	
	$return['valid'] = 'ok';
	
	try {
		$newDetailscode = getCodeDetails();
		$return['code'] = $newDetailscode;
	} catch (Exception $e) {
		$return['code'] = -1;
	}

	echo json_encode($return);
}//end isset

?>
