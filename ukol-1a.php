<?php

/*
 * Vaším prvním úkolem je vytvořit stránku evidující historii přístupů.

1. Vytvořte soubor `ukol-1.php`
2. Historii přístupů čtěte ze souboru `pristupy.txt`
  1. tento soubor bude obsahovat na každém řádku datum, kdy byla stránka načtena
  2. pokud soubor neexistuje, vypište text `Vítejte, na této stránce jste prvně!`
  3. pokud soubor existuje, vypište nadpis `Historie přístupů:` a pod ním celý obsah souboru
3. Při načtení stránky uložte do souboru `pristupy.txt` nový řádek obsahující aktuální datum a čas
  1. Aktuální datum a čas zjistíte pomocí `date('Y-m-d H:i:s')` (manuál)
  2. Pokud soubor neexistuje, vytvořte jej
  3. Pokud existuje, přidejte na konec aktuální datum a čas, nezapomeňte na odřádkování
 */

if (file_exists('pristupy.txt')){
    $handle = fopen('pristupy.txt', 'a');
    fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
    echo "Historie pristupu: <br>";
    fclose($handle);
    $handle = fopen('pristupy.txt', 'r');
    $casy = fread($handle, 1000);
    echo $casy;
    fclose($handle);
} else {
    echo "Vitejte na teto strance jste prvne!";
    $handle = fopen('pristupy.txt', 'w');
    fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
    fclose($handle);
}
