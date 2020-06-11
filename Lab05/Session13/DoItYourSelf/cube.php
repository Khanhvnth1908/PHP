<?php
$number = $_GET['number'];
echo "The cube of the first 10 numbers: $number<br>";

for ($i = 1; $i <= 10; $i++) {
    $number2 = $number*$number*$number;
    $number = $number+1;
    echo "$number2<br>";
}
?>