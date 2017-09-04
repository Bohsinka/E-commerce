<?php
/**
 *
 * Class Product
 * Gert les produits
 *
 */
class Product{
	private $name;
	private $type;
	private $price;
	private $stock;
	private $description;

	public function __construct( $name, $type, $price, $stock, $description){
		this -> name = $name
		this -> type = $type
		this -> price = $price
		this ->stock  = $stock
		this -> description = $description
	}
}