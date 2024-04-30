<?php
$randomnumbers = [];

for ($i = 0; $i < 15; $i++) {
    $casualnumber = rand(1, 100);
    if (!in_array($casualnumber, $randomnumbers)) {
        $randomnumbers[] = $casualnumber;
    }
}

var_dump($randomnumbers)
    ?>