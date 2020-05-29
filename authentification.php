<?php
	session_start();

	if(isset($_POST['pseudo']) && isset($_POST['password'])){

		#connecion à la base de données
		$identifiant = $_POST['pseudo'];
		$password = $_POST['password'];

		$dbname = 'dipcio_db';
		$dbuser = 'root';
		$dbpass = '';

		try {
			$bd = new PDO('mysql:host=localhost;dbname=' . $dbname . ';charset=utf8', $dbuser, $dbpass);

			#verifier des infos  de l'utilisateur
			$verif = $bd->query('select identifiant, password, sexe, role, nom, prenom from utilisateur where identifiant = \''.$identifiant.'\'');
			$donnee = $verif->fetch();

			#si l'utilisateur n'existe pas
			if($donnee == false) {header('Location: connexion.php?erreur=1'); return;}

			#si non si les infos sont incorrectes
			if($donnee['identifiant'] != $identifiant or $donnee['password'] != $password ){ header('Location: connexion.php?erreur=2'); return;}

			#si les infos sont correctes, je connecte et je les sauvegarde dans la session
			session_regenerate_id();

			$_SESSION['identifiant'] = $identifiant;
			$_SESSION['nom'] = $donnee['nom'];
			$_SESSION['sexe'] = $donnee['sexe'];
			$_SESSION['prenom'] = $donnee['prenom'];
			$_SESSION['role'] = $donnee['role'];

			header('Location: accueil.php');

			$verif->closeCursor();

		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}

	}
	else{
		header('Location: connexion.php?erreur=0');
	}

?>