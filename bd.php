<?php 


###################################################################################################
###################### Connexion à la BD ##########################################################
	#définition de la connexion à la base de données
	#définition des paramètres de connexion
	$dbname = 'dipcio_db';
	$dbuser = 'root';
	$dbpass = '';

	try {
		$bd = new PDO('mysql:host=localhost;dbname=' . $dbname . ';charset=utf8', $dbuser, $dbpass);
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}



############################# Fin de la connexion à la BD #########################################
###################################################################################################



###################################################################################################
######################### Mes classes #############################################################
	
	class Lexique{

		private $_id_lexique;
		private $_mot_cle;
		private $_definition;

		function __construct($id_lexique, $mot_cle, $definition){
			$this->_id_lexique = utf8_decode($id_lexique);
			$this->_mot_cle = utf8_decode($mot_cle);
			$this->_definition = utf8_decode($definition);
		}

		public function id(){
			return $this->_id_lexique;
		}

		public function mot_cle(){
			return $this->_mot_cle;
		}

		public function definition(){
			return $this->_definition;
		}

		public function setId($id){
			$this->_id_lexique = $id;
		}

		public function setMot_cle($mot_cle){
			$this->_mot_cle = $mot_cle;
		}

		public function setDefinition($definition){
			$this->_definition = $definition;
		}
	}

	class Video{

		public $_id_video;
		public $_titre;
		public $_path;

		function __construct($id_video, $titre, $path){
			$this->_id_video = utf8_decode($id_video);
			$this->_titre = utf8_decode($titre);
			$this->_path = utf8_decode($path);
		}


	}

	class Prerequis{

		public $_question;
		public $_prop1;
		public $_prop2;
		public $_prop3;
		public $_prop4;
		public $_reponse;
		public $_id_prerequis;
		public $_id_proposition;

		function __construct($_question, $_prop1, $_prop2, $_prop3, $_prop4, $_reponse, $_id_prerequis, $_id_proposition){
			$this->_question = $_question;
			$this->_prop1 = $_prop1;
			$this->_prop2 = $_prop2;
			$this->_prop3 = $_prop3;
			$this->_prop4 = $_prop4;
			$this->_reponse = $_reponse;
			$this->_id_prerequis = $_id_prerequis;
			$this->_id_proposition = $_id_proposition;

		}

	}

	class Competence{
		private $_id_competence;
		private $_competence;
		private $_id_cours;


		function __construct($id_competence, $competence, $id_cours){
			$this->_id_competence = utf8_decode($id_competence);
			$this->_competence = utf8_decode($competence);
			$this->_id_cours = utf8_decode($id_cours);
		}

		function id_competence(){
			return $this->_id_competence;
		}

		function competence(){
			return $this->_competence;
		}

		function id_cours(){
			return $this->_id_cours;
		}

		function setId_competence($id_competence){
			$this->_id_competence = $id_competence;
		}

		function setCompetence($competence){
			$this->_competence = $competence;
		}

		function setId_cours($id_cours){
			$this->_id_cours = $id_cours;
		}
	}
	
################################### Fin des classes ##################################################
######################################################################################################



#####################################################################################################
################################## Mes fonctions ####################################################
	
	#fonction pour ajouter un utilisateur
	function ajouter_utilisateur($identifiant, $nom, $prenom, $sexe, $password, $role){
		#verifier si cet identifiant n'existe pas encore

		global $bd;

		$verif = $bd->query('select identifiant from utilisateur where identifiant = \''.$identifiant . '\'');

		#si l'utilisateur existe je retourne false
		if ($verif->fetch() == true) return 'existe';

		#sinon j'ajoute le nouvel utilisateur;
		$reponse = $bd->exec('insert into utilisateur(identifiant, nom, prenom, sexe, password, role) values
			(\''.$identifiant.'\',\''.$nom.'\',\''.$prenom.'\',\''.$sexe.'\',\''.$password.'\',\''.$role.'\')');

		#fermer les curseurs
		$verif->closeCursor();

		return 'ok';
	}

	#connexion
	function connexion($identifiant, $password){

		global $bd;

		#verifier des infos  de l'utilisateur
		$verif = $bd->query('select identifiant, password, sexe, role, nom, prenom from utilisateur where identifiant = \''.$identifiant.'\'');
		$donnee = $verif->fetch();

		#si l'utilisateur n'existe pas
		if($donnee == false) return 'incorrecte';

		#si non si les infos sont incorrectes
		if($donnee['identifiant'] != $identifiant or $donnee['password'] != $password ) return 'incorrecte';

		#si les infos sont correctes, je connecte et je les sauvegarde dans la session
		session_start();
		$_SESSION['identifiant'] = $identifiant;
		$_SESSION['nom'] = $donnee['nom'];
		$_SESSION['sexe'] = $donnee['sexe'];
		$_SESSION['prenom'] = $donnee['prenom'];
		$_SESSION['role'] = $donnee['role'];

		$verif->closeCursor();

		return 'ok';

	}


	#fonction de deconnexion

	function deconnexion($actual_link){
		session_start();
		$_SESSION = array();
		session_destroy();
		setcookie('identifiant', '');
		setcookie('password','');

		return header('Location: '.$actual_link);
	}

	#################################################################################
	######################### Module Lexique ########################################

	#optenir la liste des lexiques
	function mots_cles(){
		global $bd;
		$resultats = [];

		$verif = $bd->query('select * from lexique order by mot_cle asc');

		$i = 0;

		while($donnee = $verif->fetch()){
			$lexique = new Lexique(utf8_decode($donnee['id_lexique']), utf8_decode($donnee['mot_cle']), utf8_decode($donnee['definition']));

			$resultats[$i] = $lexique;

			$i++;
		}

		$verif->closeCursor();

		return $resultats;
	}


	#fonction pour ajouter un mot au lexique
	function add_to_lexique($mot, $definition){

		global $bd;
		$verif = $bd->query('select * from lexique');

		#si le mot existe déjà
		while($donnee = $verif->fetch()){
			if(strtolower($mot) == strtolower($donnee['mot_cle'])) return 'existe';
		}

		#sinon on l'ajoute
		$rep = $bd->exec('insert into lexique(mot_cle, definition) values(\'' .$mot. '\',\'' .$definition.'\')');
		
		#je ferme les curseurs
		$verif->closeCursor();

		return 'ok';
	}


	#supprimer un mot cle
	function supprimer_lexique($id){
		global $bd;
		$bd->exec('delete from lexique where id_lexique = '.$id);
	}

	#editer un mot cle
	function editer_lexique($current_id, $mot_cle, $definition){
		
		global $bd;

		$rep = $bd->exec('update lexique set mot_cle =\'' .$mot_cle. '\', definition = \'' .$definition.'\' where id_lexique = '.$current_id);

		return 'ok';
	}

	################################## Fin module lexique ###############################################
	#####################################################################################################



	###################################################################################################
	################################### Infos statiques ###############################################

	#lire les donnees statiques
	function donnees_statiques(){
		global $bd;

		$rep = $bd->query('select * from statique');
		$donnee = $rep->fetch();

		$result = array('id' => $donnee['id'], 'module' => utf8_decode($donnee['module']),
						'exemple_situation' => utf8_decode($donnee['exemple_situation']),
						'categorie_action' => utf8_decode($donnee['categorie_action']),
						'famille_situation' => utf8_decode($donnee['famille_situation']));

		$rep->closeCursor();
		return $result;
	}


	function editer_donnees_statiques($module, $exemple_situation, $categorie_action, $famille_situation){
		global $bd;
		$rep = $bd->exec('update statique set module = \''.$module.'\', exemple_situation = \''.$exemple_situation.'\', categorie_action = \''.$categorie_action.'\', famille_situation = \''.$famille_situation.'\'');
	}


	################################ Fin infos statiques ##############################################
	###################################################################################################


	##################################################################################################
	################################## Module Cours ##################################################

	              ####################### Compétence ##########################################


	#liste des compétences d'un cours
	function liste_competences($id_cours){
		global $bd;
		$result = [];

		$rep = $bd->query('select * from competences where id_cours = ' .$id_cours);

		$i = 0;
		while($donnee = $rep->fetch()){
			$result[$i] = new Competence($donnee['id_competence'], $donnee['competence'], $donnee['id_cours']);
			$i++;
		}

		$rep->closeCursor();

		return $result;
	}



	##########################################################################################
	############################## Module Vidéo ##############################################

	#liste des videos
	function liste_videos(){
		global $bd;
		$result = [];

		$rep = $bd->query('select * from videos');

		$i = 0;
		while($donnee = $rep->fetch()){
			$result[$i] = new Video($donnee['id_video'], $donnee['titre'], $donnee['path']);
			$i++;
		}

		$rep->closeCursor();

		return $result;
	}


	#ajouter des vidéos
	function ajouter_video($titre, $path){
		global $bd;
		$rep = $bd->exec('insert into videos(titre, path) values(\'' .$titre. '\', \'' .$path. '\')');
	}

	############################# Fin Module Vidéo ########################################
	#######################################################################################



	###########################################################################################
	############################### Module Leçons ############################################

	function questionnaires($id_cours){

		global $bd;
		$result = [];

		$rep = $bd->query('select * from prerequis p inner join propositions pr where p.id_prerequis and pr.id_prerequis and p.id_cours = '.$id_cours);

		$i=0;

		while($donnee = $rep->fetch()){
			$result[$i] = new Prerequis($donnee['question'], $donnee['prop1'], $donnee['prop2'], $donnee['prop3'], $donnee['prop4'], $donnee['prop4'], $donnee['reponse'], $donnee['id_prerequis'], $donnee['id_prop']);
			$i++;
		}

		$rep->closeCursor();

		return $result;

	}


######################### Fin de mes fonctions ###############################################################
##############################################################################################################


 ?>