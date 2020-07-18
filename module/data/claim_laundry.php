<?php 
require_once('../class/Laundry.php');//para e update ang claim to 1
require_once('../class/Sales.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];

	//$details = $laundry->get_laundry2($id);
	$details = $laundry->get_dir($id);
	//customer name
	$depositaire = $details['depositaire'];
	$type = $details['libelle'];
	$dateRecep = $details['dateRecep'];
	$classeur = $details['classeur'];
	$depositaire_cni = $details['cni'];

	//remove
	$setStatut = $laundry->set_statut($id);
	$signDir = $sales->new_sign($type, $dateRecep, $classeur, $depositaire_cni);

}//end isset

$laundry->Disconnect();