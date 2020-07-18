<?php 
require_once('../class/Sales.php');
if(isset($_POST['date'])){
	$date = $_POST['date'];

	$reports = $sales->daily_sign($date);
	
?>
<br/>
<div class="table-responsive">
        <table id="myTable-report" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
					<th></th>
                    <th>Dépositaire</th>
                    <th><center>Type de documents</center></th>
                    <th><center>Date de dépôt</center></th>
                    <th><center>Date de signature</center></th>
                    <th><center>Classeur</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php 
            		$total = 0;
            		foreach($reports as $r): 
            		$total += 1;
            	?>
	                <tr align="center">
						<td><input type="checkbox" name="imSlepy" value="<?= $r['id']; ?>"></td>
	                    <td align="left"><?= $r['depositaire']; ?></td>
	                    <td><?= $r['type']; ?></td>
	                    <td><?= $r['dateRecep']; ?></td>
	                    <td><?= $r['dateSign']; ?></td>
	                    <td><?= $r['classeur']; ?></td>
	                </tr>
	            <?php endforeach; ?>
            </tbody>
	            <tr>
					<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td align="right" style="font-weight: bold; font-size: large; font-family: Constantia; color: blue;"><strong>Nombre de documents:</strong></td>
	            	<td align="center" style="font-weight: bold; font-size: large;color: blue;"><strong><?= number_format($total,0); ?></strong></td>
	            </tr>
        </table>
</div>


<!-- for the datatable of employee -->




<?php
}//end isset


