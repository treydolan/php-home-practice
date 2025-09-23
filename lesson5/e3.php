<?php
    $a = 'somevalue';
    $array = array("a" => "One","b" => "Two", "c" => "Three");
    extract($array);
    echo "\$a = $a; \$b = $b; \$c = $c"; 
?>