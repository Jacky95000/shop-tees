<?php 
// cherche si la order existe
function findOrderByUser() {
    if (array_key_exists("order", $_SESSION)) {
        return $_SESSION["order"];
    } else {
        return null;
    }
}


// permet de créer une commande
function createOrder($product, $quantity) {

    // permet de faire une vérification, pour créer la commande avec les critères indiqués
        if ($quantity < 0 || $quantity > 3) 
        {
            return  false; 
        } 
            else {

    $order = [
        "product" => $product,
        "quantity"=> $quantity
    ];
    return $order;
}
}

// Sauvegarde de la commande
function saveOrder ($order) {
    $_SESSION ["order"] = $order;
}

?>