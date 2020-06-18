<?php
$sever = "";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever,$username,$password, "publication");
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
    die("Unable to connect to the database<br>");
}
$sql_table = "Create table User_Contact("."User_id int not null primary key,
user_name char(25) not null ,"." user_email_id char(25)".")";

if (mysqli_query($connect_mysql,$sql_table))
{
    echo "Table is created<br>";
}
else{
    die("Unable to create the table<br>");
}
?>