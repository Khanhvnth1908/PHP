<?php
$server = "localhost";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($server,$username,$password,"publication");
if ($connect_mysql)
{
    echo "Connection established<br>";
}
else
    {
    die("Unable to connect<br>");
}
$db = "publication";

$mysql_db = mysqli_select_db($connect_mysql,$db);

if ($mysql_db){
    echo "<br><br>Connected to the database.";
}
else{
    die("Unable to connect to the database");
}
$sql_insert = "Insert into user_contact(User_id,user_name,user_email_id) values (103,'chese','chese@gmail.com')";
$result = mysqli_query($connect_mysql, $sql_insert);
if ($result){
    echo "<br><br>The record have been added to the table.";
}
else{
    echo "Unable to insert records.";
    mysqli_error();
}
?>