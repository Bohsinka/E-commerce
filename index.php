<?php
//Initialisation de la session
session_start();

//Initialisation de la BDD
$db = new PDO('mysql:host=192.168.1.91;dbname=Commerce', 'Commerce', 'Commerce', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
$db->exec('SET NAMES UTF8');

//Chargement des classes
function __autoload($class_name){
	require('models/'.$class_name.'.class.php');
}
	
//Gestion des pages
$page = 'home';
$access = ["home", "register", "single", "create", "profile", 'cart'];
if (isset($_GET['page'])){
	if (in_array($_GET['page'], $access))
		$page = $_GET['page'];
	else{
		header('Location: index.php');
		exit();
	}
}
//Chargement des traitements en fonction de la page en cours
$accessTraitement = ["home" => "User-traitement", "register" => "User-traitement", "profile" => "User-traitement", "create" => "Product-traitement", "single" => "Order-traitement"];
if ( isset($accessTraitement[$page]) )
	require('apps/traitement/'.$accessTraitement[$page].'.php');

require('apps/skel.php');
?>
