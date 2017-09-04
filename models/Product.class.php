<?php
/**
 *
 * Class Product
 * Gert les produits
 *
 */
class Product{
	private $id;
	private $name;
	private $type;
	private $price;
	private $stock;
	private $description;

	public function __construct( $id, $name, $type, $price, $stock, $descritpion ){
		$this-> id = $id;
		$this-> name = $name;
		$this-> type = $type;
		$this-> stock = $stock;
		$this-> descritpion = $description;
	}

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getType(){
		return $this->type;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getDescription(){
		return $this->descritpion;
	}
}