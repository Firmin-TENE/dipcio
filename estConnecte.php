<?php
	session_start();
	$return['valid'] = 'nan';
	if(isset($_POST['code'])){
		if(isset($_SESSION['identifiant'])){
			$identifiant = $_SESSION['identifiant'];
			$role = $_SESSION['role'];

			$return['identifiant'] = $identifiant;
			$return['role'] = $role;
			$return['valid'] = 'ok';
		}
	}
	echo json_encode($return)

?>