<?php

$conn = mysqli_connect("localhost", "root", "", "projetweb");
	mysqli_set_charset($conn, "utf8");

	$sql = "SELECT * FROM commande_en_cours";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)){
		if $row['commande'] == $_SESSION['commande']{

		$res = "DELETE FROM `commande_en_cours` WHERE `commande_en_cours`.`id` = ".$_POST['variable'].""; 
		};
	};


header("Location:../.?page=home");

?>