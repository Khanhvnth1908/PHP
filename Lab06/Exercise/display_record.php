<html>
<body>
<?php
$sever = "localhost";
$username = "root";
$password = "";
$connect_sql = mysqli_connect($sever,$username,$password);
if ($connect_sql){
    echo "Connection established";
    $mysql_db = mysqli_select_db($connect_sql,'publication');
    if ($mysql_db){
        echo "<br><br> Connected to the database<br><br>";
        echo "<table border bgcolor = 'red'>";
        echo "<tr><th>User_id<th><th>user_name<th><th>user_email_id</th>";
        echo "<DBQUERY q>select * from user_contact";
        echo "<DBROW><TR><TD><? q.User_id></TD><TD><? q.user_name</TD><TD><? q.user_email_id</TD></TR>";
        echo "</DBQUERY>";
        echo "</TR>";
        echo "</table>";
    }
}
?>
</body>
</html>