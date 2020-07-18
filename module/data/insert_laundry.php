<?php 
require_once('../class/Laundry.php');
if(isset($_POST['customer'])){
	$customer = $_POST['customer']; //nom
	$priority = $_POST['priority']; //classeur
	$weight = $_POST['weight'];   //qte
	$type = $_POST['type'];    //type de doc
	$cni = $_POST['cni'];

	$customer = strtolower($customer);
	$customer = ucwords($customer);

	$saveDirectory = $laundry->new_directory($customer, $priority, $weight, $type, $cni);
	$return['valid'] = false;
	if(1){
		$return['valid'] = true;
		$return['msg'] = 'Dossier enregistré avec succès !';
	}
	echo json_encode($return);
}//end isset
$laundry->Disconnect();