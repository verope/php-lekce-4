<?php

function vypisPozdrav($denniDoba, $osloveni) {
    echo "Dobré $denniDoba, $osloveni!";
    echo '<hr>';
}
$denniDoba = 'ráno';
vypisPozdrav($denniDoba, 'Karle');
// vypíše: Dobré ráno, Karle!

$osloveni = 'Veroniko';
vypisPozdrav($denniDoba, $osloveni);

$osloveni2=array('koblizku','maminko','Mikulasku');

foreach($osloveni2 as $value){
    vypisPozdrav($denniDoba, $value);
}


function vypisPozdrav2($osloveni = 'Neznámá osobo', $denniDoba = 'odpoledne') {
    echo "Dobré $denniDoba, $osloveni!";
}
vypisPozdrav2();
// vypíše: Dobré odpoledne, Karle!









