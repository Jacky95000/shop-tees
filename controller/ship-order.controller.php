<?php 
session_start();

require_once('../config.php');
require_once('../model/order.repository.php');

$message = "";


$orderByUser = findOrderByUser ();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderByUser['status'] ="SHIPPED";
    saveOrder($orderByUser);
    $message = "Commande expédié.";
}

require_once('../view/ship-order.view.php');
?>