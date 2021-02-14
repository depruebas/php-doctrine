<?php

	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

	require_once "vendor/autoload.php";

	$connectionParams = array(
    'dbname' => 'cambiatealinux_prod',
    'user' => 'devuser',
    'password' => 'K@rakul098',
    'host' => '37.187.101.226',
    'driver' => 'pdo_mysql',
	);

	$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams);

	print_r ( $conn);

	$sql = "SELECT * FROM areas";
	$stmt = $conn->query( $sql);

	/*$row = $stmt->fetchAllAssociative();

	print_r ( $row);*/

	while (($row = $stmt->fetchAssociative()) !== false) {
	    echo $row['1'] . "\n";
	}

	//print_r ( $stmt);
