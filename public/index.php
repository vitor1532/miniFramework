<?php
	require_once "../vendor/autoload.php";

	$route = new \App\Route;

	echo 'Funcionou';

	echo "<br><hr><br>";
	echo "<pre>";
	print_r($route->getUrl());
	echo "</pre>";

	echo "<br><hr><br>";

	echo "<pre>";
	print_r($route->getRoutes());
	echo "</pre>";

?>