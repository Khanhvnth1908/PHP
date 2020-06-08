<?php
$Name = fix_name("William","chickin","chese");
echo $Name[0] . " " . $Name[1] . " " .$Name[2];

function fix_name($n1,$n2,$n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1,$n2,$n3);
}
?>
