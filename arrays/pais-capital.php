<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label >Entre com um país</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>


<?php 

$capitals = array("USA" => "Washington D.C.",
                "Germany"=> "Berlin",  
                "France"=>"Paris",
                "India" => "New Delhi");


$capital = $capitals[$_POST["country"]];

echo "A capital é {$capital}";


?>