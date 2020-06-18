<?php
$connect_mysql = mysqli_connect('localhost','root','','publication');
$mysqli_db = mysqli_select_db($connect_mysql, "publication");

if (!$mysqli_db){
    die("Connection failed");
}else {
    echo "Current database is selected";
}
?>