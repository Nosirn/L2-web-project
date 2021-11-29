<?php
session_start();

if ($_SESSION['existe'] = True) {

$conn = mysqli_connect("localhost", "root", "", "projetweb");
		mysqli_set_charset($conn, "utf8");

	$sql = "SELECT * FROM pain";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)){
		if ($row['name'] == $_GET['pain']) {
			$prix = $prix + $row['prix'];
			
		}
	}

	$sql = "SELECT * FROM boissons";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)){
		if ($row['name'] == $_GET['boisson']) {
			$prix = $prix + $row['prix'];
			
		}
	}



$res = "INSERT into `commande_en_cours` (`id`, `commande`, `prix`) VALUES (NULL,'". $_GET['pain']." ".$_GET['viande']." ".$_GET['sauce1']." ".$_GET['sauce2']." ".$_GET['boisson']."',".$prix.")";


mysqli_query($conn, $res);


header("Location:../.?page=menu");

} else {

	//cree la table et ajouter l'arcticle
}

?>