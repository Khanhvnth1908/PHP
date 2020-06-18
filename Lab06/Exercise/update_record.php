<?php
$sever = "localhost";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever,$username,$password);
if ($connect_mysql){
    echo "Connection established<br>";
}
else{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($connect_mysql,"publication");
if ($mysql_db){
    echo "Connected to the database<br>";
}
else{
    die("Unable to connect to the database");
}
$sql_update = ("Update user_contact set user_name = 'David' where User_id = '102'");

$result = mysqli_query($connect_mysql,$sql_update);
if ($result){
    echo "Record update: $result <br>";
}
else{
    echo "Unable to update reccrds<br>";
    printf("Error message: %s\n",mysqli_error($connect_mysql));
}
?>