<html>
<body>
<?php
$x = 1;
$y = 2;
echo $x.'<=>'.$y,'</br> ','Returns',' = ',  $x <=> $y;
//This out put is -1
echo '</br>';
$x = 10;
$y = 10;
echo $x.'<=>'.$y,'</br> ','Returns',' = ', $x <=> $y;
//This out put is 0
echo "</br>";
$x = 10;
$y = 5;
echo $x.'<=>'.$y,'</br> ','Returns',' = ', $x <=> $y;
//This out put 1
?>
</body>
</html>
