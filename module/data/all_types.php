<br />
<?php 
require_once('../class/Laundry.php');
$types = $laundry->liste_types();
 ?>

<div class="table-responsive">
        <table id="myTable-type" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Tous les types</th>
                    <th><center>Action</center></th>

                </tr>
            </thead>
            <tbody>
            	<?php foreach($types as $t): ?>
	                <tr align="center">
	                    <td  style="font-family: Constantia; font-size: small;font-weight: bold;" align="left"><?= $t['libelle']; ?></td>
	                    <td>
                            <button onclick="editType('<?= $t['typeID']; ?>');" type="button" class="btn btn-warning btn-xs">Editer
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>   
                        </td>
	                </tr>
	            <?php endforeach; ?>
            </tbody>
        </table>
</div>


<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-type').DataTable();
    });
</script>

<?php $laundry->Disconnect(); ?>