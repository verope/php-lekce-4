<?php

/*
 * 
Domácí úkol

Vaším úkolem je vytvořit návštěvní knihu.

1. Commitněte a pushněte stávající změny, následně vytvořte větev pro práci na tomto úkolu.
2. Vytvořte soubor `navstevni-kniha.php`, který bude vycházet z souboru `_template.php`
3. Do stránky vložte formulář s:
  1. polem (input type=text), vedle něj bude uvedeno `Jméno:`
  2. textareou vedle níž bude uvedeno `Vzkaz:`
4. Formulář odesílejte metodou `POST` na adresu `vlozit.php` (nastavíte atributem formuláře `action`)
5. Vytvořte soubor `vlozit.php`, který uloží data z formuláře do souboru `prispevky.txt`, přičemž přidá HTML značky tak, aby:
  1. Jméno bylo uloženo tučně
  2. Text vzkazu byl na novém řádku pod jménem
  3. Za textem byla vodoro vná čára oddělující příspěvek od dalšího
6. Data se do souboru přidávají vždy na konec, aby se nesmazaly předchozí příspěvky
7. Po uložení příspěvku do souboru se zobrazí hláška o úspěšném uložení příspěvku a odkaz zpět stránku `navstevni-kniha.php`. Pokud se zápis do souboru nezdaří, vypište chybovou zprávu a opět odkaz zpět na návštěvní knihu.
8. Pod formulářem na stránce `navstevni-kniha.php`, vypište obsah souboru `prispevky.txt`, pokud je prázdný nebo neexistuje, vypište text `Žádné příspěvky`
9. Vytvořte funkci `seradPrispevky($prispevky, $oddelovac)`, která přejímá dva argumenty:
  1. `$prispevky` je celý obsah načteného souboru jako string
  2. `$oddelovac` je textový řetězec oddělující jednotlivé příspěvky (ten, co jste vytvořili v bodě 5.3)
10. Tato funkce rozdělí celý text pomocí zadaného oddělovače na pole (můžete použít `explode()`), 
    jednotlivé prvky pole spojí zpátky do jednoho textového řetězce, ale v opačném pořadí (od nejnovějších). Výsledný string funkce vrátí příkazem `return`
11. Namísto výpisu vypište příspěvky v opačném pořadí, použijte k tomu funkci `seradPrispevky()`
12. Vaše úpravy commitněte, mergněte do masteru a master pushněte
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Navstevni kniha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<form method="post" action="/php-lekce-4/vlozit.php">
  <div class="form-group" >
    <label for="jmeno">Jmeno: </label>
    <input type="text" class="form-control" placeholder="Jarmila" name="jmeno">
  </div>
  <div class="form-group">
    <label for="vzkaz">Vzkaz: </label>
    <textarea class="form-control" id="vzkaz" rows="3" placeholder="Vas vzkaz" name="vzkaz" ></textarea>
  </div>
  <div class="form-group">
  <input class="btn btn-primary" type="submit" value="Submit">
  </div>
</form>

<div>
<?php
/*
 * declare function
 */

function seradPrispevky($prispevky, $oddelovac){
    $oddelenePrispevky = explode($oddelovac, $prispevky);
    $vysledek = array_reverse($oddelenePrispevky);
    return implode('<hr>', $vysledek);
}

if (file_exists('prispevky.txt')){
    $handle = @fopen('prispevky.txt', 'r');
    $text = fread($handle, 1000);
    $zapisOpacne = seradPrispevky($text, '<hr>');
    echo $zapisOpacne;
} else {
    echo "<i>Zatim zadne prispevky</i>";
}
?>

</div>



</div>
</body>
</html>
