<html>
<head>
    Flowers Details
</head>
<body>
<?php
$logcookie = $_COOKIE['logname'];
echo "</head>";
echo "<body>";
echo "<centre>";
echo "<align='right'>";
echo "Welcome $logcookie";
echo "<br><a href='logout.php'>Log out</a>";
echo "<center>";
echo "<h3>Shopper's Paradise</h3>";
echo "<h5>SHop till you drop</h5>";
echo "<hr>";
echo "<br>";
echo "<table border='1'>";
echo "<tr align='center'>";
echo "<th>Code</th>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>F001</td>";
echo "<td><a href=''>Tulip Bouquet</a></td>";
echo "<td>$6.00</td>";
echo "</tr>";
echo "<td>F002</td>";
echo "<td><a href=''>Red Rose Bouquet</a></td>";
echo "<td>$8.00</td>";
echo "</tr>";
echo "<td>F003</td>";
echo "<td><a href=''>Lilacs</a></td>";
echo "<td>$10.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>
</body>
</html>