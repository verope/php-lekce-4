
<?php
$jmeno = 'Jiří';

function test() {
    var_dump(isset($jmeno)); // false
    echo '<br>';
    $jmeno = 'Antonín';
    echo $jmeno;             // Antonín
    echo '<br>';
    $prijmeni = 'Nový';
}

test();

echo $jmeno;                 // Jiří
echo '<br>';
var_dump(isset($prijmeni));  // false



