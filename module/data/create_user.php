<?php 
require_once('../class/User.php');
if(isset($_POST['customer']) and isset($_POST['cni'])){
	$customer = $_POST['customer']; //nom
	$cni = $_POST['cni'];

	$customer = strtolower($customer);
	$customer = ucwords($customer);
	
	$existe = $user->find_user($cni);
	
	if($existe == 0){
		$user->create_user($cni, $customer);
	}
	echo json_encode($return);
}//end isset
$laundry->Disconnect();