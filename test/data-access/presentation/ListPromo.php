<?php

include '../data-access/promotionDAL.php';

$promotionDAL = new PromotionDAL();

	if(isset($_POST["submit"])){
		$NewPromo = new Promotion();
		$NewPromo->setName($_POST['name']);
		$promotionDAL->addPromo($NewPromo);
	};
// include '../data-access/promo.php';

//add promo
// if (isset($_POST['submit'])) {
// 	$promo = new Promo(NULL, $_POST['name']);
// 	if (!empty($_POST['name'])) {
// 		$promo->add_promo();
// 	}
// }

//delete promo 
// if (isset($_GET['id_delete'])) {
// 	$promo = new Promo($_GET['id_delete'], NULL);
// 	$promo->delete_promo();
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Ajouter promotion</title>
</head>

<body>
	<header>
		<h1>Ajouter promotion</h1>
	</header>

	<nav>
		<div class="topnav" style="margin-top: 50px; margin-left:80%;">
			<input type="text" placeholder="Search..">
		</div>
	</nav>

	<form action="" method="POST" style="margin-top: 30px;">
		Nom de promotion: <input type="text" name="name">
		<button type="submit" name="submit">Envoyer</button>
	</form>

	<table class="table mt=5">
		<thead>
			<tr>
				<th>name</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// $get_data = new Promo(NULL, NULL);
			// $data = $get_data->select_promo();

			// if ($data->num_rows > 0) {
			// 	while ($row = $data->fetch_assoc()) {
			// 		echo "<tr>
			// 			<td>" . $row['name'] . "</td>
			// 			<td>
			// 				<a href='editPromo.php?id_edit=" . $row['id'] . "'>Edit</a>
			// 				<a href='ListPromo.php?id_delete=" . $row['id'] . "'> Delete</a>
			// 			</td>
			// 		</tr>
			// 		";
			// 	}
			// }
			?>
		</tbody>
	</table>

</body>

</html>