<div class="row" id="contenu4" style="height: 90%; overflow-y: auto; padding-top: 30px;">
	
	<?php
		$resume = resume($cours_id); //0 pour les prerequis
	?>
	<div class="col-md-3"> </div>
	<div class="col-md-4" style="margin-left: 30px;">

		<div class="card" style="width: 18rem; ">
		  <img class="card-img-top" src="Images/cours.jpg" width="70%;" height="150px" alt="Card image cap">
		  <div class="card-body" style="text-align: center;">
		    <p class="card-text">Résumé de la leçon</p>
		    <a href="<?php echo 'pdf/'.$resume; ?>" class="btn btn-primary" style="background-color: #14213d">Cliquer ici pour Télecharger</a>
		  </div>
		</div>

	</div>
	<div class="col-md-4"></div>
</div>