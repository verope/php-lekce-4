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
<?php
/*
 * 
Vypracujte doma: Úkol 2
1. Upravte soubor `ukol-2.php` tak, aby se data do tabulky načítala z souboru `objednavky.csv`
2. Soubor `objednavky.csv` obsahuje data o objednávkách
  1. Každý řádek reprezentuje jednu objednávku
  2. V sloupcích jsou uvedené číslo objednávky, celková cena, datum vytvoření a jméno zákazníka
  3. Jako oddělovač sloupců je použit středník `;`
3. Vypište data ze souboru do připravené tabulky tak, aby jednotlivé sloupce odpovídaly připravené hlavičce
 */
?>




<div class="container">
    <h1>Seznam objednávek</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Číslo objednávky</th>
                <th>Celková cena</th>
                <th>Datum vytvoření objednávky</th>
                <th>Jméno zákazníka</th>
            </tr>
        </thead>
        <?php
        $handle = fopen('objednavky.csv', 'r');
        
        while(($line = fgets($handle, 4096)) == !FALSE){
        echo '<tr>';
            $row = explode(';',$line);
            foreach ($row as $value){
                echo '<td>' . $value . '</td>';
            } 
        }
        echo '</tr>';
        ?>
        

    </table>
</div>
</body>
</html>

