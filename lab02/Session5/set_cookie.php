<?php
$Month = 86400 + time();
setcookie('Name','Cheese', $Month);
echo "The cookie has been set.";
echo $_COOKIE['Name'];
?>