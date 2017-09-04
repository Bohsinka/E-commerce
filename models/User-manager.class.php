<?php
/**
 *
 * Class Manager
 * Sert d'intermédiaire entre la DB et l'utilisateur
 *
 */
Class UserManager{
	private $db;

	public function __construct( $db ){
		$this -> db = $db;
	}
	public function findByID($id){
		$sql = "SELECT * FROM users WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute($id);
		$user = $query->fetchObject('User');
		return $user;
	}
	public function create( $login, $password, $mail ){

		/* Début de la faille spatio-temporelle */
		try{
			$user = new User();
			$user->setLogin($login);
			$user->setPassword($password);
			$user->setMail($mail);
		}catch (Exception $e){
			$error = $e->getMessage();
		}
		/* Fin de la faille */

		$sql = "INSERT INTO users (login, password, mail) VALUES(?,?,?)";
		$query = $this->db>prepare($sql);
		$query->execute([$login, $password, $mail]);
		$id = $this->db->lastInsertId();
		return $this->findByID($id);
	}
}