<?php
/*
 * 
1. Vytvořte funkci `minimum`, která spočítá minimum z 2 čísel zadaných jako argumenty
2. Funkce vrátí výsledek (nejmenší číslo) pomocí příkazu `return`
3. Pokud první nebo druhý parametr není číselný, funkci ukončete a vraťte hodnotu `false`
4. Funkci zavolejte s argumenty `56` a `12.3`, a výsledek vypište pomocí `echo` (nezapomeňte ošetřit návratovou hodnotu `false`, v takovém případě vypište chybu)
5. Změňte parametry na `56`, `'xy'`
 */
function minimum($cislo1, $cislo2){
    if(is_numeric($cislo1) && is_numeric($cislo2)){
        return min($cislo1, $cislo2);
    } else {
        return false;
    }
}


$cisla = [[56, 5]];


foreach($cisla as $key => $value){
    $vysledek = minimum($value[0],$value[1]);
}


if($vysledek){
    echo $vysledek;
} else{
    echo "chyba kamarade, chyba";
}
