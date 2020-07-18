<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {

	public function login($username, $password)
	{
		$sql = "SELECT * 
				FROM user
				WHERE user_account = ?
				AND user_password = ?
				LIMIT 1";
		return $this->getRow($sql, [$username, $password]);
	}//end login

	public function find_user($cni)
	{
		$sql = "SELECT * 
				FROM user
				WHERE cni = ?
				LIMIT 1";
		return $this->getRow($sql, [$cni]);
	}

	public function create_user($cni, $depositaire)
	{
		$default_pass = 'upac2020';
		$password = md5($default_pass);
		$sql = "INSERT INTO user(user_account, user_password,depositaire,cni)
			VALUES(?,?,?,?);";

		return $this->insertRow($sql, [$cni, $password, $depositaire, $cni]);
	}

	public function modify_User($pseudo,$dep,$sexe,$uid){		
		$sql = "UPDATE user 
				SET depositaire = ?, user_account= ?, sexe= ?
					WHERE cni = ?";

		return $this->updateRow($sql, [$dep,$pseudo,$sexe,$uid]);
	}

	public function modify_User_Pass($pwd,$pseudo,$dep,$sexe,$uid){		
		$sql = "UPDATE user 
				SET user_password = ?, depositaire = ?, user_account= ?, sexe= ?
					WHERE cni = ?";

		return $this->updateRow($sql, [$pwd,$dep,$pseudo,$sexe,$uid]);		
	}

	public function change_pass($pwd, $uid)
	{
		$sql = "UPDATE user 
				SET user_password = ?
				WHERE user_account = ?";
		return $this->updateRow($sql, [$pwd, $uid]);
	}//end change_pass
}//end class
$user = new User();
/* End of file User.php */
/* Location: .//D/xampp/htdocs/laundry/class/User.php */