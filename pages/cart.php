<?php
if (isset($_SESSION['login']))
{
	$manager = new UserManager($db);
	$user = $manager->findByLogin($_SESSION['login']);
	require('views/cart.phtml');
}
?>