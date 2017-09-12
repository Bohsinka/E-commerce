<?php
//var_dump('chargé');
class UserManager{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function findById($id){
		$sql = "SELECT * FROM users WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$user = $query->fetchObject('User');
		return $user;
	}
	public function findByLogin($login){
		$sql = "SELECT * FROM users WHERE login=?";
		$query = $this->db->prepare($sql);
		$query->execute([$login]);
		$user = $query->fetchObject('User');
		$_SESSION['login'] = $login;
		return $user;
	}

	public function findAll(){
		$sql = "SELECT * FROM users";
		$query = $this->db->prepare($sql);
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');
		return $users;
	}

	public function create($login, $password, $mail){
		$user = new User();
		$user->setLogin($login);
		$user->setPassword($password);
		$user->setMail($mail);

		$sql = "INSERT INTO users (login, password, mail) VALUES(?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$user->getLogin(),
						$user->getPassword(),
						$user->getMail()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}
	public function update($login, $password){
		$sql = " UPDATE users SET password = ? WHERE login= ? ";
		$query = $this->db->prepare($sql);
		$query->execute([$password, $login]);
	}
}
?>