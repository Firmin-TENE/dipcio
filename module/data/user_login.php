<?php 
require_once('../class/User.php');
if(isset($_POST['un']) && isset($_POST['pw']) ){
	$username = $_POST['un'];
	$password = $_POST['pw'];

	$password = md5($password);

	$result = $user->login($username, $password);
	$return['valid'] = false;
	if($result > 0){
		$return['valid'] = true;
		$_SESSION['user_logged'] = $result['cni'];
		$_SESSION['role'] = $result['role'];

		if($result['role'] == 'admin'){
			$return['url'] = "home.php";
		}
		else{
			$return['url'] = "report.php";
		}
	}
	echo json_encode($return);

}//end isset
