<?php 
include("database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login website</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to fakebook</h2>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="register">
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please enter a username";
        }
        elseif(empty($password)) {
            echo "please enter your password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
            
            // mysqli_query($conn, $sql);
            // echo "You are now registered!";
            try{
                mysqli_query($conn, $sql);
                echo "You are now registered!";
            }
            catch(mysqli_sql_exception $e){
                echo "Could not register user" . $e->getMessage();
            }
        }
    }

mysqli_close($conn);
?>