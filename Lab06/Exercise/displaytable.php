<?php
$sever = "localhost";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($sever,$username,$password);
if ($connect_mysql){
    echo "Connection established<br>";
}
else{
    die("Jnable to connect");
}
$mysql_db = mysqli_select_db($connect_mysql,"publication");
if ($mysql_db){
    echo "Connected to the database <br>";
}
else{
    die("Jnable to connect to the database<br>");
}
$sql_disp = ("select * from user_contact");
echo "<br>Displaying Record from the user_contact table:<br>";
$result = mysqli_query($connect_mysql,$sql_disp);

while ($row = mysqli_fetch_array($result)){
    echo "$row[User_id] ";
    echo "$row[user_name] ";
    echo "$row[user_email_id]";

}
