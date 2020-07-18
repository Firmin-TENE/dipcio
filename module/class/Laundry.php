<?php
require_once('../database/Database.php');
require_once('../interface/iLaundry.php');
class Laundry extends Database implements iLaundry {

	public function insert_laundry($type, $price)
	{
		$sql = "INSERT INTO laundry_type (laun_type_desc, laun_type_price)
				VALUES(?,?)";
		return $this->insertRow($sql, [$type, $price]);
	}//end insert_laundry

	public function insert_type($libelle)
	{
		$sql = "INSERT INTO doc_types (libelle)
				VALUES(?)";
		return $this->insertRow($sql, [$libelle]);
	}

	public function get_all_laundry()
	{
		$sql = "SELECT *
				FROM laundry_type
				ORDER BY laun_type_desc ASC";
		return $this->getRows($sql);
	}//end get_all_laundry


	public function liste_types(){
		$sql = "SELECT *
				FROM doc_types
				ORDER BY libelle ASC";
		return $this->getRows($sql);
	}

	public function get_type($type_id)
	{
		$sql = "SELECT * 
				FROM doc_types
				WHERE typeID = ?";
		return $this->getRow($sql, [$type_id]);
	}//end get_type

	public function edit_type($type_id, $type)
	{
		$sql = "UPDATE doc_types
				SET libelle = ?
				WHERE typeID = ?";
		return $this->updateRow($sql, [$type, $type_id]);
	}//end edit_type

	public function all_laundry()
	{
		$claimed = 0;//zero means wala pa
		$sql = "SELECT *
				FROM laundry l
				INNER JOIN laundry_type lt
				ON l.laun_type_id = lt.laun_type_id
				WHERE l.laun_claimed = ?
				ORDER BY customer_name ASC";
		return $this->getRows($sql, [$claimed]);
	}//end all_laundry

	public function all_directory()
	{
		$claimed = 0;//zero means wala pa
		$sql = "SELECT *
				FROM attente a
				INNER JOIN doc_types td
				ON a.doc_type = td.typeID
				INNER JOIN user u
				ON u.cni = a.cni
				WHERE a.statut = ?
				ORDER BY a.dateRecep DESC";
		return $this->getRows($sql, [$claimed]);
	}

	/*public function new_laundry($customer, $priority, $weight, $type)
	{
		$sql = "INSERT INTO laundry(customer_name, laun_priority, laun_weight, laun_type_id)
				VALUES(?,?,?,?);";
		return $this->insertRow($sql, [$customer, $priority, $weight, $type]);
	}//end new_laundry*/


	public function new_directory($nom, $classeur, $qte, $typeDoc, $cni)
	{
		$sql = "INSERT INTO attente(classeur,doc_type,cni, qte)
				VALUES(?,?,?,?);";
		return $this->insertRow($sql, [$classeur, $typeDoc, $cni, $qte]);
	}

	public function delete_laundry($laun_id)
	{
		$sql = "DELETE FROM laundry
				WHERE laun_id = ?";
		return $this->deleteRow($sql, [$laun_id]);
	}//end delete_laundry

	public function delete_dir($id)
	{
		$sql = "DELETE FROM attente
				WHERE docID = ?";
		return $this->deleteRow($sql, [$id]);
	}

	public function get_laundry($laun_id)
	{
		$sql = "SELECT *
				FROM laundry
				WHERE laun_id = ?";
		return $this->getRow($sql, [$laun_id]);
	}//end get_laundry

	public function edit_laundry($laun_id, $customer, $priority, $weight, $type)
	{
		$sql = "UPDATE laundry 
				SET customer_name = ?, laun_priority = ?, laun_weight = ?, laun_type_id = ?
				WHERE laun_id = ?";
		return $this->updateRow($sql, [$customer, $priority, $weight, $type, $laun_id]);
	}//end edit_laundry
	public function edit_laundry_retrait_date($uid,$retrait_date)
	{
		$sql = "UPDATE signes 
				SET dateRetrait = ?
				WHERE id = ?";
		return $this->updateRow($sql, [$retrait_date, $uid]);
	}//end edit_laundry

	public function edit_dir($docID, $classeur, $qte, $type){
		$sql = "UPDATE attente 
				SET classeur = ?, qte = ?, doc_type = ?
				WHERE docID = ?";
		return $this->updateRow($sql, [$classeur, $qte, $type, $docID]);
	}

	public function get_laundry2($laun_id)
	{
		$sql = "SELECT *
				FROM laundry l 
				INNER JOIN laundry_type lt 
				ON l.laun_type_id = lt.laun_type_id
				WHERE l.laun_id = ?";
		return $this->getRow($sql, [$laun_id]);
	}//end get_laundry

	public function get_dir($docID)
	{
		$sql = "SELECT *
				FROM attente a
				INNER JOIN doc_types td
				ON a.doc_type = td.typeID
				INNER JOIN user u
				ON u.cni = a.cni
				WHERE a.docID = ?";
		return $this->getRow($sql, [$docID]);
	}

	public function claim_laundry($laun_id)
	{
		$claimed = 1;//1 means ge claim na.. dili na e display sa table laundry
		$sql = "UPDATE laundry 
				SET laun_claimed = ?
				WHERE laun_id = ?";
		return $this->updateRow($sql, [$claimed, $laun_id]);
	}//end claim_laundry


	public function set_statut($id)
	{
		$claimed = 1;//1 means ge claim na.. dili na e display sa table laundry
		$sql = "UPDATE attente 
				SET statut = ?
				WHERE docID = ?";
		return $this->updateRow($sql, [$claimed, $id]);
	}
}//end class
$laundry = new Laundry();
/* End of file Laundry.php */
/* Location: .//D/xampp/htdocs/laundry/class/Laundry.php */