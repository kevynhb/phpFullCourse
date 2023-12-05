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
<!--    PHP_SELF pega o caminho atual da página-->
<!--colocar htmlspecialchars, funciona como filtro para evitar scripts entre sites-->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username: <br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
// $_SERVER = Super global variable(SGB) that contains headers, paths, and script locations.
//              The entries in this array are created by the web server.
//              Shows nearly everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }
?>