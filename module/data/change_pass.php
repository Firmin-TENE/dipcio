<?php 
require_once('../class/User.php');
	$pwd =$_POST['pwd'];
	$name =$_POST['name'];
	$pseudo =$_POST['pseudo'];
	$sexe =$_POST['sexe'];
	$uid = $_SESSION['user_logged'];
	if ($_POST["pwd"] != "" ){
		$pwd = md5($pwd);	
		$res = $user->modify_User_Pass($pwd,$pseudo,$name,$sexe,$uid);		
	} else {
		$res = $user->modify_User($pseudo,$name,$sexe,$uid);
	}
	
	$return['valid'] = false;
	if($res){
		$return['valid'] = true;
		$return['msg'] = 'Profil mis à jour avec succès !';
	}
	echo json_encode($return);

$user->Disconnect();