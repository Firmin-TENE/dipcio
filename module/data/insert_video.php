<?php 
require_once('../../bd.php');
if(isset($_POST['video_titre'])){
	$video_titre = $_POST['video_titre']; 
	
	$name= $_FILES['video_file']['name'];
	$tmp_name= $_FILES['file']['tmp_name'];
	$position= strpos($name, ".");
	$fileextension= substr($name, $position + 1);
	$fileextension= strtolower($fileextension); 
	
	$return['valid'] = false;

	/*try {
		ajouter_video($video_titre, $video_file);
		$return['valid'] = true;
	} catch (Exception $e) {
		$return['valid'] = false;
	}*/

	$return['fichier'] = $name;

	echo json_encode($return);
}//end isset
