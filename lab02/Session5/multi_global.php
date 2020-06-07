<?php
$var1 = 15;
$var2 = 16;
function multiply(){
    global $var1,$var2;
    $var2 = $var2 * $var1;
    echo $var2;
}
echo "The multiplication value of 15 * 16 = ";
multiply();