<?php
	include('bd.php');

	if(isset($_POST['identifiant']) && isset($_POST['nom'])){
		
		#je vérifie que ces champs ne sont pas vides
		if($_POST['identifiant'] != '' && $_POST['nom'] != ''){
			$identifiant = $_POST['identifiant'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$role = $_POST['role'];
			$password = '_'.$identifiant;

			$rep = ajouter_utilisateur($identifiant, $nom, $prenom, $role, $password);

			if($rep == 'existe') return header('Location: ajouter_utilisateur.php?erreur=1');
			return header('Location: ajouter_utilisateur.php?success=ok');
		}
		else{
			return header('Location: ajouter_utilisateur.php?erreur=0');
		}
	}
?>