<?php
    function display() {
        for ($i = 1; $i < 4; $i++) {
            yield $i;
        }
    }

    $ret = display();
    foreach ($ret as $val) {
        echo "$val ";
    }