<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
<!--    This is the login page-->
<!--    <a href="home.php">This goes to the home page</a>-->

<form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
</form>

</body>
</html>
<?php
    if(isset($_POST["login"])){

        if (!empty($_POST["username"]) &&
            !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");

        }else {
            echo "Fatal error in username or password";
        }
    }

?>