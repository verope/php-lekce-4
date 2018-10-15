<?php
/*
 * . Vytvořte soubor `vlozit.php`, který uloží data z formuláře do souboru `prispevky.txt`, přičemž přidá HTML značky tak, aby:
  1. Jméno bylo uloženo tučně
  2. Text vzkazu byl na novém řádku pod jménem
  3. Za textem byla vodoro vná čára oddělující příspěvek od dalšího
  6. Data se do souboru přidávají vždy na konec, aby se nesmazaly předchozí příspěvky
  7. Po uložení příspěvku do souboru se zobrazí hláška o úspěšném uložení příspěvku a odkaz zpět stránku `navstevni-kniha.php`. 
    Pokud se zápis do souboru nezdaří, vypište chybovou zprávu a opět odkaz zpět na návštěvní knihu.
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
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

<?php

if(!empty($_POST['jmeno'])){
   if (file_exists('prispevky.txt')){
    $handle = fopen('prispevky.txt', 'a');
    $text = "<b>" . $_POST["jmeno"] . "</b> (" . date('d M Y H:i:s') . ")<br>\n" . $_POST["vzkaz"] . "<br>\n" . "<hr>";
    fwrite($handle, $text);
    fclose($handle);    
    echo "Dekujeme, Vas prispevek byl ulozen. " . '<a href="/php-lekce-4/navstevni-kniha.php">Kliknete sem pro navrat do navstevni knihy.</a>';
   } else {
    $handle = fopen('prispevky.txt', 'w');
    $text = "<b>" . $_POST["jmeno"] .  "</b> (" . date('d M Y H:i:s') . ")<br>\n" . $_POST["vzkaz"] . "<br>\n" . "<hr>";
    fwrite($handle, $text);
    fclose($handle);   
    echo "Dekujeme, Vas prispevek byl ulozen. " . '<a href="/php-lekce-4/navstevni-kniha.php">Kliknete sem pro navrat do navstevni knihy.</a>';
    } 
} else {
    echo "Je nam lito, zapis se nezdaril. " . '<a href="/php-lekce-4/navstevni-kniha.php">Zkuste to znovu.</a>';
}

?>

</div>
</body>
</html>
