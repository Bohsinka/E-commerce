
<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=Commerce', 'root', 'troiswa', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
$db->exec('SET NAMES UTF8');

function __autoload($class_name){
	require('apps/'.$class_name.'.class.php');
}

$page = 'home';
$access = ["home", "register", "single", "create", "profile"];
if (isset($_GET['page']))
{
	if (in_array($_GET['page'], $access))
	{
		$page = $_GET['page'];
	}
	else
	{
		header('Location: index.php');
		exit();
	}
}

$accessTraitement = ["home" => "User-traitement", "register" => "User-traitement", "profile" => "User-traitement", "create" => "Product-traitement"];
if (isset($accessTraitement[$page]))
{
	require('apps/traitement/'.$accessTraitement[$page].'.php');
}

require('apps/skel.php');
?>
