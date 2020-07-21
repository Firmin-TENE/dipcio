<div class="row test" id="contenu2" style="height: 90%; overflow-y: auto;">
	<div class="col-md-12">
		<div class="rquiz-multichoice" lang="fr">
			
			<div class="row">
				<div class="col-md-12">
					<span id="rquiz-multichoice" style="color: white; font-weight: bold;  text-align: center; width: 100%"> <span style="text-decoration: underline;">NB:   </span> Répondez au questions suivantes en cliquant sur les boutons corresp aux bonnes réponses:</span>
				</div>
			</div>
			
			
			<div class="row" style="margin-top: 26px; color: white; width: 100%;">
				<!-- Proposition -->
				<?php
					$questions = liste_exercices(1); //0 pour les prerequis
                    $n = count($questions);

                    for($i=0; $i<$n; $i++){
				?>
				<div class="row">
					<div class="col-md-12">
						  <p> <?=$questions[$i]->_question?><?=$questions[$i]->_prop1 ?><?=$questions[$i]->_prop2 ?><?=$questions[$i]->_prop3 ?><?= $questions[$i]->_prop4 ?></p>
					</div>
				</div>

				<?php 
				}
				 ?>

			</div>

		</div>
	</div>
</div>