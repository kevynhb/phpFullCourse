<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="card" value="Visa" >
        Visa <br>
        <input type="radio" name="card" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="card" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php 

    if(isset($_POST["confirm"])){

        if(isset($_POST["card"])){
            $card = $_POST["card"];
            echo "You selected {$card}";
        }
        else{
            echo "Select the card";
        }
    }

?>