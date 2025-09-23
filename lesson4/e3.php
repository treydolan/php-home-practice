<?php
    $val = 11;

    if($val < 11) {
        $result = ($val >= 10) ? "Green" : "Red";

        echo $result;
    } else {
        $message = ($val >= 10) ? "White" : "Black";
        echo $message;
    }
?>