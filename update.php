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


	$name = 'HOLA Mundo2';
	$id = 21;

	$sql = "update areas set name = ? Where id = ?";
	$stmt = $conn->prepare( $sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $id);

	$stmt->execute();
