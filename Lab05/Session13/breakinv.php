<?php
$number = $_GET['num'];
if ($number == 0){
    exit;
}
$ans = 1/ $number;
echo "<br>Inverse of the entered number is 1/$number";
echo "<br><br> Its decimal qequivalent is $ans";
echo "<br><br><a href=break.html>Go back</a>";