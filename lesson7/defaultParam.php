<?php
    function get_random_bool_text($type = 'coin') {
        $rand = mt_rand(0,1);
        switch($type) {
            case 'coin':
                $result = ($rand == 1) ? 'heads' : 'tails';
                break;
            case 'switch':
                $result = ($rand == 1) ? 'on' : 'off';
                break;
        }
        return $result;
    }

    echo get_random_bool_text('coin');
    echo '<br>';
    echo get_random_bool_text('switch');
    echo '<br>';
    echo get_random_bool_text();
?>