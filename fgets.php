<?php

$handle = fopen('pristupy.txt', 'r');

if ($handle) {
    while (($line = fgets($handle, 1000)) !== false) {
        echo $line; // zde se vypíše jeden řádek soubo
        echo '<hr>';
    }
    fclose($handle);
}