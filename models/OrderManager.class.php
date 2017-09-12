<?php
//var_dump('chargé');
class OrderManager{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function findById($id){
		$sql = "SELECT * FROM orders WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$order = $query->fetchObject('Order', [$this->db]);
		return $order;
	}

	public function findAll(){
		$sql = "SELECT * FROM orders";
		$query = $this->db->prepare($sql);
		$query->execute();
		$orders = $query->fetchAll(PDO::FETCH_CLASS, 'Order', [$this->db]);
		return $orders;
	}

	public function findCartByUser(User $user){
		$sql = "SELECT * FROM orders WHERE id_user=? AND status=?";
		$query = $this->db->prepare($sql);
		$query->execute([$user->getId(), 'panier']);
		$order = $query->fetchObject('Order', [$this->db]);
		return $order;
	}

	public function create(User $user){
		$order = new Order($this->db);
		$order->setUser($user);

		$sql = "INSERT INTO `orders` (id_user) VALUES(?)";
		$query = $this->db->prepare($sql);
		$query->execute([$order->getUser()->getId()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}

	public function add(Order $order, Product $product)
	{
		$sql = "INSERT INTO carts (id_order, id_product) VALUES(?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$order->getId(), $product->getId()]);
		return $this->findById($order->getId());
	}
}
?>