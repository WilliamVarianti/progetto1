<?php

	include('connessione.php');

	$sql ="INSERT INTO prodotti (nome) VALUES (:nome)";	
	$query=$db->prepare($sql);
	$query->bindParam(':nome', $_POST['nome']);
	$query->execute();

	$db = null;

	header('Location: index.php');


?>