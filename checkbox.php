<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="pizza"> Pizza <br>
        <input type="checkbox" name="hamburguer" value="hamburguer"> Hamburguer <br>
        <input type="checkbox" name="hotdog" value="hotdog"> Hotdog <br>
        <input type="checkbox" name="taco" value="taco"> Taco <br>

        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 

    if(isset($_POST["submit"])){

        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["hamburguer"])){
            echo "You like hamburguer! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }
    }

?>