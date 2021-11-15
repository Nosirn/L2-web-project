<?php

function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']['libelleProduit'] = array();
       $_SESSION['panier']['qteProduit'] = array();
       $_SESSION['panier']['prixProduit'] = array();
       $_SESSION['panier']['verrou'] = false;
    }
    return true;
   }
?>