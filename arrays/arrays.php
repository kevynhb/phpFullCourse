<?php 




$foods = array("apple", "orange", "banana", "fruits");

// $foods[0] = "pineapple";
// array_push($foods, "pineapple", "kiwi");
// array_pop($foods); // remove ultimo elemento array
// array_shift($foods); // remove primeiro
$reversed_foods = array_reverse($foods);

foreach($foods as $food){
    echo $food . "<br>";
}

var_dump($foods);
var_dump($reversed_foods);

echo count($foods);


?>