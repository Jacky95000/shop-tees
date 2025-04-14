<?php
// contient les infos de la commande
class Order {
    public $product;
    // nom du produit
    public $quantity;
    // la quantité
    public $createdAt;
    // quand cela à été créer
    public $status;
    // son statut
}
// permet de mieux gérer les commandes

$order = new Order();
// création d'uin objet de la classe "order"

$order->product = "PS5";
$order->quantity = 1;
$order->createdAt = new DateTime();
$order->status = "CART";
// commande préparé mais pas finalisé

