<?php

require_once "login.php";

$connection = new mysqli($hn,$un,$pw,$db);
if ($connection->connect_errno) die("Fatal Error");

$pw_insert = '124';
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    $un_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_USER']);
    $pw_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_PW']);

    $query = "select * from users where username = '$un_temp'";
    $result = $connection->query($query);

    if (!$result) die("User not found");
    elseif ($result->num_rows){
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();

            session_start();
            $_SESSION['forename'] = $row[0];
            $_SESSION['surname'] = $row[1];

            echo htmlspecialchars("$row[0] $row[1] : Hi $row[0], you are now logger in as '$row[2]'");
            die("<p><a href='continue.php'>click here to continue</a></p>");
    }
    else die("Invalid username/password combination");
}
else{
    header('www-Authenticate: Basic realm="Restricted Area"');
    header("HTTP/1.0 401 Unauthorized");
    die("Please enter your username and password");
}

$connection->close();

function mysql_entities_fix_string($conn,$string){
    return htmlentities(mysql_fix_string($conn,$string));
}

function mysql_fix_string($conn,$string){
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
}

