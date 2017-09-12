<?php
//var_dump('chargé');
if( isset($_POST['action']) ){
	$action = $_POST['action'];
	/*REGISTER*/
	if($action === 'register'){
		if( isset($_POST['password'], $_POST['passwordVerif']) && $_POST['password'] !== '' && $_POST['passwordVerif'] !== ''){
			if( $_POST['password'] === $_POST['passwordVerif']){
				if( isset($_POST['login']) && $_POST['login'] !== '' ){
					$manager = new UserManager($db);
					$test = $manager->findByLogin($_POST['login']);
					if($test === false)
					{
						$user = $manager->create($_POST['login'], $_POST['password'], $_POST['mail']);
						$_SESSION['login'] = $user->getLogin();
					}
					else
						return $error = 1;
				}else
					return $error = 2;
			}else
				return $error = 3;
		}else
			return $error = 4;
	/*LOGIN*/
	}else if($action === 'login') {
		if( isset($_POST['login'], $_POST['password']) ){
			$manager = new UserManager($db);
			$user = $manager->findByLogin($_POST['login']);
			if($user === true)
			{
				$_SESSION['login'] = $user->getLogin();
				return $user;
			}
			else if(($user === false))
				return $error = 1;
		}
	/*LOGOUT*/
	}else if($action === 'logout'){
		session_destroy();
		header('Location: index.php?page=home');
		exit();
	/*CHANGE PASSWORD*/
	}else if($action === 'change'){
		if( isset($_POST['passwordNew'], $_POST['passwordVerif']) && $_POST['passwordNew'] !== '' && $_POST['passwordVerif'] !== ''){
			if( $_POST['passwordNew'] === $_POST['passwordVerif']){
				$manager = new UserManager($db);
				$user=$manager->update($_SESSION['login'], $_POST['passwordNew']);
			}else
				return $error = 1;
		}else
			return $error = 2;
	}
}
?>