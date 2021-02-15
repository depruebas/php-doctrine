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


	switch ( $argv[1])
	{
		case 'insert':

			$domain_id = 2;
			$name = 'HOLA Mundo';
			$enabled = 0;

			$conn->insert( 'areas', array(
																'name' => $name,
																'domain_id' => $domain_id,
																'enabled' => $enabled,
															));

			break;

		case 'update':

			$conn->update( 'areas', array( 'name' => 'Pruebas010101'), array('id' => 19));

			break;

		case 'delete':

			$conn->delete( 'areas', array( 'id' => 19));

			break;

		default:
			echo "
				usage:\n
				  php example.php insert\n
				  php example.php update\n
				  php example.php delete\n\n


			";
			break;
	}