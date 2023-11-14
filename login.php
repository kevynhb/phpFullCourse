<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="index.php" method="post">
<label for="">Username:</label><br>
<input type="text" name="username"><br>

<label for="">Password</label><br>
<input type="password" name="password"><br>

<input type="submit" value="Login">
</form>


</body>
</html>

<?php 

    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

?>