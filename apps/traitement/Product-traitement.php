<?php
if( isset($_POST['action']) ){

	$action = $_POST['action'];
	if($action == 'add'){
		if( isset($_POST['name'], $_POST['price'], $_POST['picture'], $_POST['content']) ){

			$manager = new ProductManager($db);
			$product = $manager->add( $_POST['name'], $_POST['price'], $_POST['picture'], $_POST['content'] );
		}
	}
}
?>