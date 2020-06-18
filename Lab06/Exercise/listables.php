<?php
$dbname = 'mysql';
if (!mysqli_connect('localhost', 'root','')){
    echo 'Could not connect to mysql';
    exit;
}
$sql = "SHOW TABLES FROM $dbname";
$connect_mysql = mysqli_connect('localhost','root','');
$result = mysqli_query($connect_mysql,$sql);
if (!$result){
    echo "Db Error,Unable to list tables<br>";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}
while ($row = mysqli_fetch_row($result)){
    echo "Table: {$row[0]}<br>";
}
?>