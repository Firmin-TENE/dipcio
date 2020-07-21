<br />
<?php 
include('../../bd.php');
$videos = liste_videos();
?>

<div class="table-responsive">
        <table id="myTable-laundry" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Titre</th>
                    <th>Chemin</th>
                    <!-- <th><center>Action</center></th> -->
                </tr>
            </thead>
            <tbody>
            	<?php
                    foreach($videos as $v): 
                ?>
                <tr align="center">
                    <td><input type="checkbox" name="imSlepy" value="<?= $v->_id_video; ?>"></td>
                    <td><i class="fa fa-video-camera" aria-hidden="true"></i></td>
                    <td><?= $v->_titre; ?></td>
                    <td><?= $v->_path; ?></td>
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

