<?php
$A = $_GET['name'];
if ($A > 60){
    echo "Congrats";
    echo "You have got Grade 1. ";
}
else if ($A < 60 and $A > 40){
    echo "Congrats!";
    echo "You have got Grade2.";
}
else{
    echo "Sorry. You have failed";
}