<?php
require_once("../config.php");


// ça vérifie si une session existe, si elle existe, elle récupère les données, si non c'est une nouvelle session qui est créé.
session_start();

$message = "";
// cela permet de vérifier que quantity et product existe
if (array_key_exists("quantity", $_POST) &&
array_key_exists("product", $_POST)) 
{
    // permet de prendre les valeurs que l'utilisateur a envoyé
    // Les données que l'utilisateur envoie sont stockée sur le serveur, l'utilisateur peut changer de pages elles seront conservées.
    $order = [
     "product" => $_POST["product"],
    "quantity" => $_POST["quantity"]

    ];

    $_SESSION["order"] = $order;
}




require_once("../view/create-order.view.php");