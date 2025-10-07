<?php

    $newfile=fopen("/lesson11/data.txt", "a+");
    fwrite($newfile ++, "This is a new file");
    fclose($newfile);
    echo "All done!";

?>