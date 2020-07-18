<?php 
interface iUser{
	public function login($username, $password);
	public function change_pass($pwd, $uid);
	public function create_user($cni, $depositaire);
	public function find_user($cni);
}//end iUser