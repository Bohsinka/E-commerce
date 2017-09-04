<?php
/**
 *
 * Class User
 * Gert les Utilisateurs
 *
 */
class User
{
	private $id;
	private $login;
	private $password;
	private $mail;

	public function __construct( $id, $login, $password, $mail ){
		$this-> id = $id;
		$this-> login = $login;
		$this-> password = $password;
		$this-> mail = $mail;
	}


	public function getId(){
		return $this->id;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getEmail(){
		return $this->email;
	}

	public function setLogin($login){
		if (strlen($login) >= 4 && strlen($login) <= 63)
			$this->login = $login;
		elseif (strlen($login) > 63)
			throw new Exception("Login invalide (il doit faire moins de 63 caractères)")
		else
			throw new Exception("Login invalide (il doit faire au minimum 4 caratères)");
	}
	public function setPassword($password){
		if (strlen($password) >= 4 && strlen($password) <= 63)
			$this->login = $login;
		elseif (strlen($password) > 63)
			throw new Exception("Mot de passe invalide (il doit faire moins de 63 caractères)")
		else
			throw new Exception("Mot de passe invalide (il doit faire au minimum 4 caratères)");
	}
	// public function setEmail($email){
	// 	$this->email = $email;
	// }
}
?>