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
            

            echo"<select id='viande'>";
            display($meat);
            echo"</select>";
            echo"<select id='sauce'>";
            display($sauce);
            echo"</select>";
            echo"<select id='boisson'>";
            displaydrinks($drinks);
            echo"</select>";
            
            
            
        } else if ($page =="signup"){
            echo"<h4>3</h4>";
        } else if ($page == "signin"){
            echo"<h4>4</h4>";
        } else if ($page == "panier"){
            echo"<h4>5</h4>";
        }




		?>
	</section>

</body>
</html>