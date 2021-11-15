<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Le palai des saveurs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Le palai des saveurs</h1>
		<nav>
			<li><a href=".?page=home">Acceuil</a></li>
			<li><a href=".?page=menu">Menu</a></li>
			<li><a href=".?page=signup">Insription</a></li>
            <li><a href=".?page=signin">Connection</a></li>
            <li><a href=".?page=panier">Panier</a></li>
		</nav>
	</header>
	<section>
		
		<?php
        if ($page == "home"){
            echo"<h4>1</h4>";
        } else if ($page == "menu"){

            //?page=menu&viande=taviande&sauce=tasauce&kebab
            //?page=menu&viande=taviande&sauce=tasauce&durum
            ?>
            <form method="GET" action="ajouter.php">
                <article>
                    <section>
                    <h5>Pain : </h5>
                        <select name='pain'>
                        <?php
                        display($pain);
                        ?>
                    </select></section>
                    <section>
                        <h5>Viande : </h5>
                        <select name='viande'>
                        <?php
                        display($meat);
                        ?>
                    </select></section>
                    <section>
                        <h5>Sauces : </h5>
                        <select name='sauce'> 
                        <?php
                        display($sauce);
                        ?>
                    </select></section>
                </article>
            </form>
            <input type="submit" value="Ajouter">
            
            <h2>Boissons</h2>
                <select id='boisson'>
                    <?php
            displaydrinks($drinks);
                ?>
            </select>
            <?php
        } else if ($page =="signup"){
            echo"<h4>3</h4>";
        } else if ($page == "signin"){
            echo"<h4>4</h4>";
        } else if ($page == "panier"){
            ?>
            <form action='fonction_panier.php' method='post' >
            <table style='width: 400px'>
            <tr><td colspan='4'>Votre panier</td></tr>
            <tr>
                <td>Libellé</td>
                <td>Quantité</td>
                <td>Prix Unitaire</td>
                <td>Action</td>
            </tr>
            <?php
        
        if (creationPanier()){
        $nbArticles=count($_SESSION['panier']['libelleProduit']);
        if ($nbArticles <= 0  )
    
        echo "<tr><td>Votre panier est vide </ td></tr>";
        else{
            for ($i=0 ;$i < $nbArticles ; $i++){
                echo "<tr>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
                echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
                echo "</tr>";
            }

            echo "<tr><td colspan=\"2\"> </td>";
            echo "<td colspan=\"2\">";
            echo "Total : ".MontantGlobal();
            echo "</td></tr>";

            echo "<tr><td colspan=\"4\">";
            echo "<input type=\"submit\" value=\"Rafraichir\"/>";
            echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

            echo "</td></tr>";
            }
        }
        
        }



		?>
	</section>

</body>
</html>