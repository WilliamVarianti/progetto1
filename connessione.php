<?php

	$user = 'utente_progetto';
	$pass = 'password_progetto';

	try {
	    $db = new PDO('mysql:host=localhost; dbname=progetto1', $user, $pass); 
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage();
	    die();
	}

?>