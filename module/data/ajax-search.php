<?php 
require_once('../class/User.php');
	if(isset($_POST['q'])){
		
		$cni = $_POST['q'];
		$reponse = $user ->find_user($cni);

	   // $resp = $reponse->fetchAll(PDO::FETCH_OBJ);

	    /*if ($resp) {
			foreach($resp as $rep){
				$r=$rep;
			}
			$json['error'] = false;
			//$json['nom'] = $r->nom;
			$json['depositaire'] = $r['depositaire'];
	    }*/
	    $return['valid'] = false;
	    if($reponse > 0){
	    	$return['depositaire'] = $reponse['depositaire'];
	    	$return['valid'] = true;

	    }
		echo json_encode($return);

	}//end isset

?>
