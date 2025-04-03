<?php
require_once("../config.php");
require_once("../model/product-repository.php");
require_once("../model/order.repository.php");


// ça vérifie si une session existe, si elle existe, elle récupère les données, si non c'est une nouvelle session qui est créé.
session_start();

$message = "";
// cela permet de vérifier que quantity et product existe
if (array_key_exists("quantity", $_POST) &&
array_key_exists("product", $_POST)) 
{
    // si existe, la fonction create et save l'enregistre dans session
    $order = createOrder($_POST['product'], $_POST['quantity']);
           saveOrder($order);

    
}
// récupère la commande, sauvegardé dans session
$orderByUser = findOrderByUser();




require_once("../view/create-order.view.php");