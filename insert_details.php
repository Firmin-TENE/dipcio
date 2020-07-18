<?php 

include('bd.php');
if(isset($_POST['codeExo'])){
	$codeExo = $_POST['codeExo'];
	$rep = $_POST['rep'];
	$rep1 = $_POST['rep1'];
	$codeDetailsResultats = $_POST['codeDetailsResultats'];

	$return['status'] = $codeDetailsResultats;
	
	try {
		insertDetailsResults($codeExo, $rep, $rep1, $codeDetailsResultats);
	} catch (Exception $e) {
		$return['status'] = 'non';
	}

	echo json_encode($return);
}//end isset

?>
