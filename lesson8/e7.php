<?php

    $p = "This is a very sunny day.";
    $q = array_map("strtoupper", explode(" " , $p));
    foreach($q as $value) {
        print "$value ";
    }

?>