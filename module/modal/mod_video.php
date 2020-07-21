<div class="modal fade" id="modal-video">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">

				<form class="form-horizontal" action="ajout_video.php"  role="form" id="form-new-video" enctype="multipart/form-data" method="post">
					<input type="hidden" id="operation_type">
					<input type="hidden" id="laun-id">
					<input type="hidden" id="docID">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Titre de la vidéo:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="video_titre" placeholder="Entrer le titre ou la description de la vidéo" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Vidéo:</label>
				    <div class="col-sm-9">
				      <input type="file" class="form-control" name="file" id="file" placeholder="Entrer la définition du mot" required>
				    </div>
				  </div>

				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <input  type="submit" class="btn btn-primary" value="Valider">
				    </div>
				  </div>
				</form>


			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
