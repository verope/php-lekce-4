<?php


if (file_exists('soubor-r.csv')){
    $text = "testuji zápis do souboru. <br>\n";
    $handle = @fopen('soubor.csv', 'a');
    
    $text = fread($handle, 1000);
echo $text;
} else {
    echo "soubor neexistuje";
}

