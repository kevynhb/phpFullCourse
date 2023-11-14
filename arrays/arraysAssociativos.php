<?php 

// associativa array = An array made of key=>value pairs

// countries => capitals
// id => username
// item => price

$capitals = array("USA" => "Washington D.C.",
                "Germany"=> "Berlin",  
                "France"=>"Paris",
                "India" => "New Delhi");

// $capitals["USA"] = "Las Vegas"; //altara valor do array
// $capitals["China"] = "Beijing";
// array_pop($capitals);
$keys = array_keys($capitals);
var_dump($keys);

foreach($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}

?>