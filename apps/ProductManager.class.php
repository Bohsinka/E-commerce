<?php
//var_dump('chargé');
class ProductManager{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function findById($id){
		$sql = "SELECT * FROM products WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$product = $query->fetchObject('Product');
		return $product;
	}

	public function findAll(){
		$sql = "SELECT * FROM products";
		$query = $this->db->prepare($sql);
		$query->execute();
		$products = $query->fetchAll(PDO::FETCH_CLASS, 'Product');
		return $products;
	}

	public function add($name, $price, $picture, $content){
		$product = new Product();
		$product->setName($name);
		$product->setPrice($price);
		$product->setPicture($picture);
		$product->setContent($content);

		$sql = "INSERT INTO products (name, price, picture, content) VALUES(?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$product->getName(),
						$product->getPrice(),
						$product->getPicture(),
						$product->getContent()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}
}
?>