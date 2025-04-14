<?php 
require_once('partial/header.php');
?>

<main>

<h2>Expédition de votre commande</h2>
<?php if ($orderByUser) { 
?>
 <p>Commande en attente : <?php echo $orderByUser["quantity"]; ?> : <?php echo $orderByUser["product"]; ?> 
 <p>Créé le <?php echo $orderByUser['createAt']->format('y-m-d'); ?></p>
   <p>Statut de votre commande : <?php echo $orderByUser["status"]; ?></p>

   <form method="post">
   <button>Expédier</button>
   </form>
      <?php }
        else { ?>
    <p>Aucune commande à payer</p>
        <!-- Si la commande est vide renvoie un message à l'utilisateur -->
   <?php 
} ?>
</main>