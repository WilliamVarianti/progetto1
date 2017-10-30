<?php include('connessione.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="gestione_prodotti.php" method="POST">
	 <p>Nome prodotto : </p>
	 <input type="text" name="nome">

	 <input type="submit" name="invio" value="invio">

</form>

<h3>Prodotti :</h3>
<table border="1px">
	<tr>
		<th>ID</th>
		<th>NOME</th>
	</tr>
	<tr>
		<?php
			$sql='SELECT * FROM prodotti';
			$query=$db->prepare($sql);
			$query->execute();

			while($row = $query->fetch(PDO::FETCH_ASSOC)){
			    echo '<td>'.$row['id']'</td>'
			    	 '<td>'$row['nome']'</td>';
			}
		?>
	</tr>
</table>

</body>
</html>