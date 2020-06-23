<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];

setcookie("logname",$val1);
if ($val1==""){
    echo "Pleases enter the name";
    echo "<html>";
    echo "<head>";
    echo "<title>Validate</title>";
    echo "</head>";
    echo "<body>";
    echo "<br>";
    echo "<a href='information.html'>Back</a>";
    echo "</body>";
    echo "<html>";
}
else if ($val2==""){
    echo "Pleases enter the password";
    echo "<html>";
    echo "<head>";
    echo "<title>Validate</title>";
    echo "</head>";
    echo "<body>";
    echo "<br>";
    echo "<a href='information.html'>Back</a>";
    echo "</body>";
    echo "<html>";
}
else{
    Header("Location: homepage.php");
}