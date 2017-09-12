<?php
//var_dump('chargé');
class Product{
	private $id;
	private $name;
	private $price;
	private $picture;
	private $content;
	private $db;
	

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getPicture(){
		return $this->picture;
	}
	public function getContent(){
		return $this->content;
	}

	public function setName($name){
		$this->name = $name;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function setPicture($picture){
		$this->picture = $picture;
	}
	public function setContent($content){
		$this->content = $content;
	}
}
?>