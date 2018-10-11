<?php

/*
 * 
Úkol 4
1. Vytvořte soubor `ukol-4.php`
2. Vytvořte funkci `maximum`, která přejímá jako argumety dvě čísla a vypíše to větší z nich
3. Funkci `maximum` zavolejte s čísly pro porovnání:
  1. `304` a `560` 
  2. `7.2` a `7.1` 
  3. `23` a `23`
  4. `253` a `'x'`
4. Do funkce `maximum` přidejte kontrolu, zda byly skutečně zadány číselné hodnoty. Pokud některý z argumentů není číslo (pomocí funkce `is_numeric($num)` - manuál), vypište `Chyba!`.
 */


function maximum($cislo1, $cislo2){
    if(is_numeric($cislo1) && is_numeric($cislo2)){
        echo max($cislo1, $cislo2);
        echo '<hr>';
    } else {
        echo "Nezadali jste cislo.";
        echo '<hr>';
    }
}


$cisla = [[304, 506], [7.1, 7.2],[23,23],[253,'x'],[100,150.6]];


foreach($cisla as $key => $value){
    maximum($value[0],$value[1]);
}






