<?php

session_start();
require_once ("../model/order.repository.php");

$orderByUser = findOrderByUser();

if ($_SERVER ['REQUEST_METHOD'] == "POST") {

    $orderByUser['status'] = 'PAID';

    saveOrder($orderByUser);
}
// verification si méthode POST 
// status de la commande changer de l'utilisateur en paid
// sauvegarde de la commande payée par l'utilisateur dans la session
require_once ("../view/pay-order.view.php");