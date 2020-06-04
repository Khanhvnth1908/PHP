<?php
class Greeting{
    private $word = "Hello";
}
$closure = function ($whom){
    echo "$this->word $whom \n";
};
$obj = new Greeting();

$closure->call($obj, 'Kelvin');
echo "</br>";
$closure->call($obj,'John');