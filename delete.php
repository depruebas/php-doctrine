<?php

	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

	require_once "vendor/autoload.php";


	$connectionParams = array(
    'dbname' => 'pruebas',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
	);


	$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams);


	$id = 21;

	$sql = "delete from areas Where id = ?";
	$stmt = $conn->prepare( $sql);
	$stmt->bindValue(1, $id);

	$stmt->execute();
