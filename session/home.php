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
    <title>Document</title>
</head>
<body>

This is initial home page - login success
<form action="home.php" method="post">
    <input type="submit" name="logout" value="logout">
</form>

</body>
</html>
<?php
echo "<br>";
echo "Hello " . $_SESSION["username"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>