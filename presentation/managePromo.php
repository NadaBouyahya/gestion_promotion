<?php 
include '../data-access/promo.php';

	if(isset($_POST['submit'])){
		$promo = new Promo(NULL, $_POST['name']);
		if(!empty($_POST['name'])){
			$promo->add_promo();
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Ajouter promotion</title>
</head>
<body>
	<header>
		<h1>Ajouter promotion</h1>
	</header>
<form action="" method="POST">
Nom de promotion: <input type="text" name="name" >                                                          
   
<button type="submit" name="submit">Envoyer</button>
</form>
</body>
</html>