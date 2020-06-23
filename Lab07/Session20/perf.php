<html>
<head>
    Perfumes Details
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
echo "<td>P001</td>";
echo "<td><a href=''>Charles</a></td>";
echo "<td>$38.00</td>";
echo "</tr>";
echo "<td>P002</td>";
echo "<td><a href=''>Maui Rain</a></td>";
echo "<td>$30.00</td>";
echo "</tr>";
echo "<td>P003</td>";
echo "<td><a href=''>Night Mist</a></td>";
echo "<td>$25.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>
</body>
</html>