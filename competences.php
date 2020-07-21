<div class="row" id="contenu1" style="height: 90%; overflow-y: auto;">
	<div class="col-md-12">
		<!-- pour le titre du mot à définir -->
		<div class="row" style="margin: 20px; margin-right: 10px; martext-align: left; font-weight: bold; font-size: 1.3em; font-family: Constantia;">
		    <div class="col-md-12" style="color: red;">
		      Au terme de cette unité d'enseignement, je dois être capable de:
		    </div>
		</div>

		<!-- pour la définition -->
		<?php  

		  if(!isset($_GET['l'])) return header('Location: lecons.php');
		  $id_cours = $_GET['l'];
		  $liste_competences = liste_competences($id_cours);
		  $n = count($liste_competences);

		  for($i=0; $i<$n;$i++){
		?>
		    
		  <div class="row" style="font-weight: bold; color: white; font-family: Constantia; font-size:1.2em">
		     <div class="col-md-11" style="margin-left: 50px; margin-top: 10px; line-height: 1.5; margin-right: 7em; text-align: justify;"> 
		         <i class="fa fa-umbrella" aria-hidden="true" style="margin-right:8px;"></i>
		         <?= $liste_competences[$i]->competence(); ?>
		     </div> 
		  </div>
		<?php } ?>
	</div>
</div>







<!--

<div class="row" id="contenu1" style="height: 98%; overflow-y: auto;">


</div>

-->