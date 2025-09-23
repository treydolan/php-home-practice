<?php

    $foo = create_function('$x', "return $x*$x;");
    echo $foo(10);
?>