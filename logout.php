<?php
	include('bd.php');

	if(isset($_SESSION['url'])){
		deconnexion($_SESSION['url']);
		session_unregister('url');
	}
	else{
		deconnexion('http://localhost/dipcio/accueil.php');
	}
?>