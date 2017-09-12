<?php
//var_dump('chargé');
class Order
{
	private $id;
	private $id_user;
	private $date;
	private $status;

	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getProducts()
	{
		$manager = new ProductManager($this->db);
		return $manager->findByOrder($this);
	}

	public function add(Product $product)
	{
		$manager = new OrderManager($this->db);
		$manager->add($this, $product);
	}

	public function setUser(User $user)
	{
		$this->id_user = $user->getId();
		$this->user = $user;
	}

	public function getUser()
	{
		$manager = new UserManager($this->db);
		return $manager->findById($this->id_user);
	}
}
?>