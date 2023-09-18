<?php

ob_start();

for ($i=0; $i<25; $i++) {
    echo 25;
    ob_flush();
    flush();
    sleep(1);
}

ob_end_flush();
?>