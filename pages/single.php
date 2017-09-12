<?php 
	$manager = new ProductManager($db);
	$product = $manager->findById($_GET["id"]);
	require 'views/single.phtml';
?>
