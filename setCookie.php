

<?php 

    // cookie = information about a user stored in a user´s web-browser
    // targeted advertisements, browsing preferences, and other non-sensitive data 

    // primero argumento é a chave, segundo valor, terceiro é um tempo de expiração e o último o caminho do arquivo
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

    var_dump($_COOKIE);

 
?>