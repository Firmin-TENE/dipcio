<?php 
interface iLaundry{
	public function insert_laundry($type, $price);
	public function get_all_laundry();//all laundry types
	public function get_type($type_id);
	public function edit_type($type_id, $type);
	public function all_laundry();//
	//public function new_laundry($customer, $priority, $weight, $type);
	public function delete_laundry($laun_id);
	public function get_laundry($laun_id);
	public function edit_laundry($laun_id, $customer, $priority, $weight, $type);
	public function get_laundry2($laun_id);//with inner join para ma compute ang amount
	public function claim_laundry($laun_id);
	public function insert_type($libelle);
	public function liste_types();
	public function new_directory($nom, $classeur, $qte, $typeDoc, $cni);
	public function all_directory();
	public function get_dir($docID);
	public function set_statut($id);
	public function delete_dir($id);
	public function edit_dir($docID, $classeur, $qte, $type);
}//end iLaundry