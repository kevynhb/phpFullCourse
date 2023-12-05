<?php 
/*
    haashing = transforming sensitive data (password)
    into letters, numbers, and/or symbols
    via a mathematical process. (similar to encryption)
    hides the original data from 3rd parties.
*/

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash;

if(password_verify("pizza123k", $hash)) {
    echo "You are logged in!";
}else {
    echo "Incorrect Password.";
}

?>