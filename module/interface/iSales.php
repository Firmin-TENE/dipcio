<?php 
interface iSales{
	public function new_sales($customer, $type_desc, $laundry_rec, $amount);	
	public function daily_sales($date);
	public function daily_sign($date);
	public function new_sign($type, $dateRecep, $classeur, $depositaire_cni);
}//end iSales