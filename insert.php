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


	$domain_id = 2;
	$name = 'HOLA Mundo';

	$sql = "insert into areas(domain_id, name, enabled)  values( ?, ?, ?)";
	$stmt = $conn->prepare( $sql);
	$stmt->bindValue(1, $domain_id);
	$stmt->bindValue(2, $name);
	$stmt->bindValue(3, 0);
	$stmt->execute();

