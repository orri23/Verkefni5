<?php
$source = 'mysql:host=127.0.0.1;dbname=0210972769_Verkefni5vef';
$user = '0210972769';
$passw = 'mypassword';

try {
	$conn = new PDO($source, $user, $passw);
 	$conn->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
		echo 'Connection lost: ' . $e->getMessage();
		exit(); 
}
?>