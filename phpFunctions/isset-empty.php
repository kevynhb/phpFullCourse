<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <label type="text">Username: </label>
        <input type="text" name="username"><br>

        <label type="text">Username: </label>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="Login">
        

    </form>
</body>
</html>
<?php 

// isset() = Returns TRUE if a variable is declared and null
// empty() = Returns TRUE if a variable is not declared, false, null, " "

// foreach($_POST as $key => $value){
//     echo "{$key} = {$value} <br>";
// }

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "Username is missing";
    }
    elseif(empty($password)){
        echo "Password is missing";
    }else{
        echo "Helllo {$username}";
    }
}

// $username = "" ; 
// echo isset($username);

// echo "<br>";

// if(empty($username)) {
//     echo "A variável está vazia";
// }
// else {
//     echo "A variável NÂO está vazia";
// }

?>