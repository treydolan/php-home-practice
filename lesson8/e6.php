<?php

    class number {
        public $a = 10;
        public $b = 20;
        public $c = 30;
    }

    $numbers = new number();

    foreach($numbers as $var => $value) {
        echo "$value ";
    }

?>