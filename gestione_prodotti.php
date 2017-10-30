	<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	$user = 'utente_progetto';
	$pass = 'password_progetto';

	try {
	    $db = new PDO('mysql : host=localhost; dbname=progetto1', $user, $pass);
	    echo "ok";
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
	
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestione Prodotti</title>
</head>
<body>

<h3>Gestione dei prodotti</h3>



</body>
</html>


<?php $db = null; ?>