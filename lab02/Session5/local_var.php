<?php
$num2 = 0;
echo "The multiplication value of 14 * 15 is <br>";
function multiplication(){
    $num1 = 14;
    $num2 = 15;
    $num2 = $num2 * $num1;
    echo $num2;
}
multiplication();

echo "<br> The value of the local variable on exiting the function is<br>";
echo $num2;