<?php
require_once 'login.php';

$conn = new mysqli($pn,$un,$pw,$db);
if ($conn->connect_errno) die("Fatal Error");
//$query = "create table users(
//    forename varchar (32) not null ,
//    surname varchar (32) not null,
//    username varchar (32) not null UNIQUE ,
//    password varchar (32) not null
//)";
//$result = $conn->query($query);
//if (!$result) die("Fatal Error");

$forename = 'Vuong';
$surname = 'Ngoc';
$username = 'khanhvg';
$password = '124';
$hash = password_hash($password, PASSWORD_DEFAULT);

add_user($conn ,$forename,$surname,$username,$hash);


$forename = 'Khanh';
$surname = 'Vuong';
$username = 'ngockhanh';
$password = '124';
$hash = password_hash($password, PASSWORD_DEFAULT);

add_user($conn ,$forename,$surname,$username,$hash);




function add_user($conn, $pn, $un, $pw, $db)
{
    $stmt = $conn->prepare('insert into users values (?,?,?,?)');
    $stmt->bind_param('ssss',$pn, $un, $pw, $db);
    $stmt->execute();
    $stmt->close();
}