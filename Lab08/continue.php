<?php

session_start();

if (isset($_SESSION['forename'])){
    $forename = htmlspecialchars($_SESSION['forename']);
    $surname = htmlspecialchars($_SESSION['surname']);

    echo "Welcome back $forename.<br> Your full name is $forename $surname<br>";
}
else{
    echo "Please <a href='authentication2.php'>Click here</a> to log in";
}