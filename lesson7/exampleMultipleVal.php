<?php

    function array_analyze($array, &$sum, &$prod, &$avg) {
        $sum = array_sum($array);
        $prod = array_product($array);
        $avg = $sum / count($array);
    }

    $list = array(1, 4, 9, 16);
    array_analyze($list, $s, $p, $a);
    echo "<p>
            Sum: $s <br>
            Product: $p <br>
            Average: $a
        </p>";

?>