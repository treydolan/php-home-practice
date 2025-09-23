<?php

    function fun($num1, $num2) {
        echo '$num1 = '.$num1. '<br />$num2 ='.$num2. '';
        if($num1 < $num2) {
            return;
        } else {
            fun($num1-- , ++$num2);
        }
    }

    fun(3,2);
?>