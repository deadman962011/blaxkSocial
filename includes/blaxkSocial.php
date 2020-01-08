<?php

$blaxkSocialDBuser= 'root';
$blaxkSocailDBpass= '';

$dsn = 'mysql:host=localhost;dbname=blaxksocialdb';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$blaxkSocialConn = new PDO($dsn, $blaxkSocialDBuser, $blaxkSocailDBpass, $option);
		
		$blaxkSocialConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}

?>