<?php
// var_dump($_POST, $_SESSION);
if( isset($_POST['action']) ){

	$action = $_POST['action'];
	if($action == 'add'){
		if( isset($_POST['id_product'], $_SESSION['login']))
		{
			$manager = new ProductManager($db);
			$product = $manager->findById($_POST['id_product']);
			if ($product)
			{
				$manager = new UserManager($db);
				$user = $manager->findByLogin($_SESSION['login']);

				$panier = $user->getPanier();

				$panier->add($product);

				header('Location:index.php?page=cart');
				exit;
			}
		}
	}
}
?>