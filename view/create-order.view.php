<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

<!--  -->
<?php if (array_key_exists("order", $_SESSION)) { ?>
   <p>Commande en attente : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?> </p> <?php
} ?>




        <h3><?php echo $message; ?></h3>
    <form method="post">

    <!-- Permet d'entrer un nombre -->
    <label for="quantity">Quantity<input type="number" name="quantity"></label> 
    <!-- Permet de choisir entre plusieurs élément défini -->
    <label for="product">
        <select name="product">

        <!-- Boucle créer pour avoir tous les produits -->
        <?php foreach ($products as $product) { ?>
            <option value="<?php echo $product; ?>"><?php echo $product; ?> </option>
            <?php
        } ?>
        </select>
    </label>
        
    <button type="submit">Envoyer</button>
    </form>

            <h3><?php echo $message ?></h3>

    </main>
</body>
</html>