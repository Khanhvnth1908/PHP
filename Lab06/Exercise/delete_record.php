<?php
$sever = "localhost";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever,$username,$password, "publication");
if ($connect_mysql){
    echo "Connection established<br>";
}
else{
    die("Unable to connect<br>");
}
$sql_delete = ("delete from user_contact where User_id = 101");

$result = mysqli_query($connect_mysql,$sql_delete);
if ($result){
    echo "Record deleted: $result<br>";
}
else{
    echo "Record not found in the table<br>";
    printf("Error message: %\n", mysqli_error($connect_mysql));
}
?>
