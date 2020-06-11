<?php
$number = 1;
echo "The odd numbers between 1 and 10 are: ";
do{
    echo "<br>$number";
    $number = $number + 2;
}while($number <= 10);
echo "<br> The loop ends because the condition is satisfiled";
?>