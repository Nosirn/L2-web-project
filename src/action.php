<?php

$page = "home";
if (isset($_GET["page"]))
	$page = $_GET["page"];
    
$drinks = loaddrinks();
$meat = loadmeat();
$sauce = loadsauce();
$pain = loadbread();
?>