<div class="modal fade" id="modal-laun">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" id="form-new-lexique">
					<input type="hidden" id="laun-type">
					<input type="hidden" id="laun-id">
					<input type="hidden" id="docID">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Mot-clé:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="mot" placeholder="Entrer le mot clé à  définir" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Définition:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="def" placeholder="Entrer la définition du mot" required>
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
