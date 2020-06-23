<?php
$logcookie = $_COOKIE['logname'];

echo "<html>";
echo "<head>";
echo "<title>Home page</title>";
echo "</head>";
echo "<body>";
echo "<align='right'>";

echo "Welcome to $logcookie";
echo "<br><a href='logout.php'>Log Out</a>";
echo "<center>";
echo "<h3>Shopper's paradise</h3>";
echo "<h5>SHop till you drop!!</h5>";
echo "<hr>";
echo "<br>";
echo "<table>";
echo "<tr align='center'>";
echo "<td><a href='conf.php'>Confectionery</a></td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td><a href='flowers.php'>FLower</a></td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td><a href='access.php'>Accessories</a></td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td><a href='perf.php'>Perfumes</a></td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td><a href='apparels.php'>Apparels</a></td>";
echo "</tr>";
echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";
?>

