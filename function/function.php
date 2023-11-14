<?php 

    function hypotenuse($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4); // 5

?>