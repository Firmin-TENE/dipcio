<?php
require_once('../database/Database.php');
require_once('../interface/iSales.php');
class Sales extends Database implements iSales {

	public function new_sales($customer, $type_desc, $laundry_rec, $amount)
	{
		$sql = "INSERT INTO sales(sale_customer_name, sale_type_desc, sale_laundry_received, sale_amount)
			VALUES(?,?,?,?)";
		return $this->insertRow($sql, [$customer, $type_desc, $laundry_rec, $amount]);
	}//end new_sales

	public function new_sign($type, $dateRecep, $classeur, $depositaire_cni)
	{
		$sql = "INSERT INTO signes(type, dateRecep, classeur, depositaire_cni)
			VALUES(?,?,?,?)";
		return $this->insertRow($sql, [$type, $dateRecep, $classeur, $depositaire_cni]);
	}

	public function daily_sales($date)
	{
		$sql = "SELECT *
				FROM sales
				WHERE DATE(`sale_date_paid`) = ?
				ORDER BY sale_date_paid DESC";
		return $this->getRows($sql, [$date]);
	}//end daily_sales

	public function daily_sign($date)
	{
		$sql = "SELECT *
				FROM signes s
				INNER JOIN user u
				ON s.depositaire_cni = u.cni
				WHERE DATE(`dateRecep`) = ? and DATE(`dateRetrait`) is null
				ORDER BY dateRecep DESC";
				
		return $this->getRows($sql, [$date]);
	}//end daily_sales
	public function retire_list(){
		$sql = "SELECT *
				FROM signes
				WHERE DATE(`dateRetrait`) is not null
				ORDER BY dateRecep DESC";
		return $this->getRows($sql);
	}
}//end class
$sales = new Sales();

/* End of file Sales.php */
/* Location: .//D/xampp/htdocs/laundry/class/Sales.php */