<?php
	if( isset($_SESSION['login']) ){
		$manager = new UserManager($db);
		$user = $manager->findByLogin($_SESSION['login']);
		require 'views/profile.phtml';
	}else{
		header('Location: index.php?page=home');
		exit();
	}
?>