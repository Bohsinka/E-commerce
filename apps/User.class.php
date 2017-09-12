<?php
//var_dump('chargé');
class User{
	private $id;
	private $login;
	private $password;
	private $mail;

	public function getId(){
		return $this->id;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getMail(){
		return $this->mail;
	}

	public function setLogin($login){
		$this->login = $login;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setMail($mail){
		$this->mail = $mail;
	}
}
?>