<html>
<body>
<?php
$x = "Cat";
$y = "Dog";
echo $x.'<=>'.$y,'// Returns', $x<=>$y;
//This will output -1 because Cat is less than Dog
echo "</br>";

$x = "PHP";
$y = "PHP";
echo $x.'<=>'.$y,'// Returns', $x<=>$y;
//This will output 0 because both strings have same values
echo "</br>";
$x = "COMPUTE";
$y = "APPLE";
echo $x."<=>".$y,'// Returns',$x<=>$y;
//This will output 1 because "Compute" is greater than Apple.
echo "</br>";
?>
</body>
</html>