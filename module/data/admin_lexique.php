<br />
<?php 
include('../../bd.php');
$lexiques = mots_cles();
?>

<div class="table-responsive">
        <table id="myTable-laundry" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Mots-clés</th>
                    <th>Définition</th>
                    <!-- <th><center>Action</center></th> -->
                </tr>
            </thead>
            <tbody>
            	<?php
                    foreach($lexiques as $l): 
                ?>
                <tr align="center">
                    <td><input type="checkbox" name="imSlepy" value="<?= $l->_id_lexique; ?>"></td>
                    <td><?= $l->_mot_cle; ?></td>
                    <td><?= $l->_definition; ?></td>
                   <!-- <td>
                        <button onclick="" type="button" class="btn btn-warning btn-xs">
                           Edit
                           <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </button>
                    </td> -->
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

