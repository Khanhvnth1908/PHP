<?php
$a1 = "William";
$a2 = "chickin";
$a3 = "chese";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names($a1,$a2,$a3);
echo $a1 . " " . $a2 . " " . $a3;


function fix_names(&$a, &$b, &$c){
    $a = ucfirst(strtolower($a));
    $b = ucfirst(strtolower($b));
    $c = ucfirst(strtolower($c));
}