<br />
<?php 
require_once('../class/Laundry.php');
$laundries = $laundry->all_directory();
 ?>

<div class="table-responsive">
        <table id="myTable-laundry" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Dépositaire</th>
                    <th>cni</th>
                    <th><center>Type de document</center></th>
                    <th><center>Nombre d'exemplaires</center></th>
                    <th><center>Date dépôt</center></th>
                    <th><center>classeur</center></th>
                    <th><center>Action</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php
                    foreach($laundries as $l): 
                ?>
                <tr align="center">
                    <td><input type="checkbox" name="imSlepy" value="<?= $l['docID']; ?>"></td>
                    <td align="left"><?= ucwords($l['depositaire']); ?></td>
                    <td><?= $l['cni']; ?></td>
                    <td><?= $l['libelle']; ?></td>
                    <td><?= $l['qte']; ?></td>
                    <td><?= $l['dateRecep']; ?></td>
                    <td><?= $l['classeur']; ?></td>
                    <td>
                        <button onclick="editLaundry('<?= $l['docID']; ?>')" type="button" class="btn btn-warning btn-xs">
                           Edit
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
        $('#myTable-laundry').DataTable();
    });
</script>

<?php $laundry->Disconnect(); ?>