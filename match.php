<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="index.php" method="post">
        <label>X: </label>
        <input type="text" name="x">

        <br>
        <label>Y: </label>
        <input type="text" name="y">
        
        <br>
        <label>Z: </label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>

</body>
</html>

<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // echo $total = abs($x);
    // $total = pow($x, $y);   //funcao eleva o primeiro valor com o segundo
    // $total = sqrt($x);
    // $total = max($x, $y, $z);   //retorna o maior valor entre as váriaveis, min() retorna o menor
    // $total = pi();  // retorna o valor de pi
    $total = rand(1, 100); // valor entre 1 e 100 randomico

    echo $total;
?>