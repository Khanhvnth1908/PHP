<?php
//Onject1
$object = new User();
print_r($object);


$object->name = "joe";
$object->password = "sdajsddnlf";
print_r($object);
echo "<br>";

$object->save_name();


class User{
    public $name, $password;

    function save_name(){
        echo "Save User code goes here";
    }
}