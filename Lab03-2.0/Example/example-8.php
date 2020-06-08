<?php
$object1 = new Users1();
$object1-> name= "Alice";
$object2 = clone $object1;
$object2-> name = "Annie";

echo "Object1 name = " .$object1->name . "<br>";
echo "Object2 name = " .$object2->name;

class Users1{
    public $name;
}