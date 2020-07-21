<div class="modal fade" id="modal-laun">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" id="form-new-laun">
					<input type="hidden" id="laun-type">
					<input type="hidden" id="laun-id">
					<input type="hidden" id="docID">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">CNI dépositaire:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="cni" placeholder="Entrer le numéro de cni du dépositaire" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nom dépositaire:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="customer" placeholder="Entrer le nom du dépositaire" required>
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">classeur :</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="priority" placeholder="Entrer l'identifiant du classeur" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Qté:</label>
				    <div class="col-sm-9">
				      <input type="number" step="any" class="form-control" id="weight" placeholder="Enter le nombre d'exemplaires à certifier" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Type de documents:</label>
				    <div class="col-sm-9">
					    <select class="btn btn-default" id="newlaun-type">
					    	<?php foreach($types as $t): ?>
					    		<option value="<?= $t['typeID']; ?>"><?= $t['libelle']; ?></option>
					    	<?php endforeach; ?>
					    </select>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-primary">Enregistrer</button>
				    </div>
				  </div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
