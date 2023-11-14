<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="index.php" method="post">
    <label for="">Quantidade de pizzas: </label>
    <input type="number" name="quantity">
    <input type="submit" value="total">
</form>

</body>
</html>

<?php 

    $item = "pizza";
    $price = 5.99;
    $quantidade = $_POST["quantity"];
    $total = $quantidade * $price;

    echo "<br>";
    echo "Você pediu uma {$item} que custam {$price}";
    echo "<br>";
    echo "O valor total de {$quantidade}  é de: {$total}";


?>