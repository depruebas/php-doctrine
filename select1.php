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

	print_r ( $conn);

	$sql = "SELECT * FROM areas";
	$stmt = $conn->query( $sql);

	/*$row = $stmt->fetchAllAssociative();

	print_r ( $row);*/

	while (($row = $stmt->fetchAssociative()) !== false) {
	    echo $row['name'] . "\n";
	}

	//print_r ( $stmt);
