<?php

$handle = fopen('soubor.csv', 'r');

if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        $row = explode(',', $line);
        if(isset($row[0])){
        echo 'Jméno: ' . $row[0];
        } else 'Chybi';
        if(isset($row[1])){
        echo  ' ' . $row[1] . ', ';
        } else 'Chybi';
        if(isset($row[2])){
        echo 'Datum: ' . $row[2] . ', ';
        } else 'Chybi'; 
        if(isset($row[3])){
        echo 'Částka: ' . $row[3] . '<br>';
        } else 'Chybi';
    }
    fclose($handle);
}


file_put_contents('data-2.txt, $data')