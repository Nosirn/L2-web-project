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


            ?>
            <form method="GET" action="./panier/ajouter.php">
                <article>
                    <!-- <section>
                        <h5>Quantité : </h5>
                        <form>
                            <input id="moins" type="button" value="-" />
                            <input id ="result" type="texte" value="1" maxlength="2" name='quantite' /> 
                            <input id="plus" type="button" value="+" />
                        </form> -->

                    </section>
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
                        <select name='sauce1'> 
                        <?php
                        display($sauce);
                        ?>
                    </select>
                    <select name='sauce2'> 
                        <?php
                        display($sauce);
                        ?>
                    </select>
                </section>
                </article>
            
            
            
            <h2>Boissons</h2>
            <P> prix de boiss = 2€</P>
                <select id='boisson' name='boisson'>
                    <?php
            displaydrinks($drinks);
                ?>
            </select>

            <input type="submit" value="Ajouter">

        </form>

            <?php
        } else if ($page =="signup"){
            echo"<h4>3</h4>";
        } else if ($page == "signin"){
            echo"<h4>4</h4>";
        } else if ($page == "panier"){
            ?>
            <form action='./panier/fonction_panier.php' method='post' >
                <h4>Votre panier</h4>
                <table style='width: 400px'>
            <tr>
                
                <td>Libellé</td>
                <td>Quantité</td>
                <td>Prix Unitaire</td>
                <td>Action</td>
            </tr>
                <?php
                global $c;
                $sql = "SELECT * FROM commande_en_cours";
                $result = mysqli_query($c, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                echo "
            <tr><from action='./panier/supprimer.php' method='post'>
                <td>".$row['commande']."</td>
                <td>
                <input id='moins' type='button' value='-' />
                <input id ='result' type='texte' value='1' maxlength'2' name='quantite'  /> 
                <input id='plus' type='button' value='+' />
                </td>
                <td>".$row['prix']."</td>
                <td name=".$row['id']."><input type='submit' value='supprimer'></td>
                </from></tr>";
        }
    }
        ?>
        </table>
        <input type="submit" value="valider !">

            <?php
        /*
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



		*/?>
	</section>

</body>
</html>