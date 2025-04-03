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
function createOrder($product, $quantity,) {

    // permet de faire une vérification, pour créer la commande avec les critères indiqués
        if ($quantity < 0 )  {

           throw new Exception("Impossible de mettre une quantité inférieur à 0");
        } else if ($quantity > 3) {
            throw new Exception("Impossible de mettre une quantité supérieur à 3");
        }
            else {
    $order = [
        "product" => $product,
        "quantity"=> $quantity,
        "createDate" => new DateTime()
    ];
    return $order;
}
}

// Sauvegarde de la commande
function saveOrder ($order) {
    $_SESSION ["order"] = $order;
}

?>