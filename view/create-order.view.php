<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h3><?php echo $message; ?></h3>
    <form method="post">

    <!-- Permet d'entrer un nombre -->
    <label for="quantity">Quantity<input type="number" name="quantity"></label> 
    <!-- Permet de choisir entre plusieurs élément défini -->
    <label for="product">
        <select name="product">
        <option value="ps5">PS5</option>
        <option value="switch">Switch</option>
        <option value="xbox">Xbox</option>
        </select>
    </label>
        
    <button type="submit">Envoyer</button>
    </form>
    </main>
</body>
</html>