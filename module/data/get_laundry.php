<?php 
require_once('../class/Laundry.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];

	$reponse = $laundry->get_dir($id);
	echo json_encode($reponse);	
}//end isset
$laundry->Disconnect();