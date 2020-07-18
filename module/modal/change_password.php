<?php
	$uid = $_SESSION['user_logged'];
	require_once('database/Database.php');
	$db = new Database();
	$sql = "SELECT * 
				FROM user
				WHERE cni = ?
				LIMIT 1";
	$result = $db->getRow($sql, [$uid]);
	$db->Disconnect();

	if ($result > 0) {
	
?>

<div class="modal fade" id="modal-pass">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" id="form-change">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Nom</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" placeholder="Modifier votre nom" value="<?=$result["depositaire"]?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Pseudo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="pseudo" placeholder="Modifier votre pseudo" value="<?=$result["user_account"]?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Sexe</label>
				    <div class="col-sm-10">
					<select class="form-control" id="sexe">
						<option>Homme</option>
						<option>Femme</option>
					</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Mod de passe:</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="pwd" placeholder="Entrer le mot de passe">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd2">Confirmation:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd2" placeholder="Confirmer le mot de passe">
				    </div>
				  </div>
				  
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Save Changes</button>
				    </div>
				  </div>
				</form>				
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php
	}
?>