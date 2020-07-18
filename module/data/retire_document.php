<?php 
require_once('../class/Laundry.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $date = date('Y-m-d H:i:s');

	//$result = $laundry->delete_laundry($id);
    $result = $laundry->edit_laundry_retrait_date($id,$date);
    
	echo json_encode($result);
}//end isset

$laundry->Disconnect();