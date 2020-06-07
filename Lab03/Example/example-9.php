<?php
$object = new subscriber();
 $object->name = "Khansh";
$object->password = "sjdkashjk";
$object->phone = "098392413";
$object->email = "abc@gamil.com";

$object->display();

class User{
    public $name,$password;
    function save_user(){
        echo "Save User code goes here";
    }
}
class subscriber extends User {
    public $phone,$email;

    function display(){
        echo "name: " . $this->name  . "<br>";
        echo "password: " . $this->password . "<br>";
        echo "phone: " .$this->phone . "<br>";
        echo "email: " .$this->email;
    }
}