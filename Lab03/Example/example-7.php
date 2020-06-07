<?php
$object1 = new Users();
$object1->name= "Alice";

$object2 = $object1;
$object2->name = "Annie";

echo "Object1 name = " .$object1->name . "<br>";
echo "Object2 name = " .$object2->name;

class Users{
    public $name;
}