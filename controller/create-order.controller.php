<?php
require_once("../config.php");

$message = "";
// cela permet de vérifier que quantity et product existe
if (array_key_exists("quantity", $_POST) &&
array_key_exists("product", $_POST)) 
{
    // permet de prendre les valeurs que l'utilisateur a envoyé
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
}

$message = "Votre panier contient: " . $quantity . " " . $product;


require_once("../view/create-order.view.php");