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

	public function setName(){
		$this->name = $name;
	}
	public function setType(){
		$this->name = $type
	}
	public function setPrice(){
		$this->name = $price;
	}
	public function setDescrition(){
		$this->name = $descrition;
	}
}