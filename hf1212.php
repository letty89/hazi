<?php

print("<p class= \"exam\" id=\"exam1\" 
onClick=\"this.style.backgroundColor= \'yellow\' \">Huu</p>");

$today = date("Y F d");
print $today;


function faktorialis(int $szam)
{
    $fakt = 1;
    for ($n = 1; $n <= $szam; $n++) {
        $fakt *= $n;
        $eredmeny = array();
        array_push($eredmeny, $fakt);
        print_r($eredmeny);
        print '<pre>';
        var_dump($eredmeny);
        print '</pre>';
    }
}
print '<br>';
print faktorialis(3);
