<br />
<?php 
include('../../bd.php');
$cours = cours();
$autre = localisation();
?>

<div class="table-responsive">
        <table id="myTable-laundry" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Titre</th>
                    <!-- <th><center>Action</center></th> -->
                </tr>
            </thead>
            <tbody>
            	<?php
                    foreach($cours as $c): 
                ?>
                <tr align="center">
                    <td><input type="checkbox" name="imSlepy" value="<?= $c['id_cours']; ?>"></td>
                    <td><?= $c['titre']; ?></td>
                   
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

