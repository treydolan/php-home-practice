<?php 
    $array = array("a1" => 'x', "a2" => 'e', "a3" => 'z');
    asort($array);
    foreach($array as $keys => $values) {
        print "$keys = $values<br/>";
    }
?>