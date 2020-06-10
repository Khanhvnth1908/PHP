<?php
$sale = 2750;
if ($sale > 2000){
    $comm = $sale * .1;
    echo "Sale: $$sale <br> Commission : $$comm";
}
else{
    $comm = $sale * .05;
    echo "Sale: $$sale <br> Commission : $$comm";
}