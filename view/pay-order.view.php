<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>


<?php if ($orderByUser) { ?>
   <p>Commande en attente : <?php echo $orderByUser["quantity"]; ?> : <?php echo $orderByUser["product"]; ?> 
   <p>Créé le <?php echo $orderByUser['createDate']->format('y-m-d'); ?></p>
   <p>Statut de votre commande : <?php echo $orderByUser["status"]; ?></p>

   <button>Payer</button>
      <?php }
        else { ?>
    <p>Aucune commande à payer</p>
        <!-- Si la commande est vide renvoie un message à l'utilisateur -->
   <?php 
} ?>




      
    </main>
</body>
</html>