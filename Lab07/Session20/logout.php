<?php
$logcookie = $_COOKIE['logname'];

setcookie("logname");


Header("Location: information.html");