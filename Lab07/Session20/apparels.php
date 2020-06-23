<html>
<head>
    Apparels Details
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
echo "<td>AP001</td>";
echo "<td><a href=''>Three piece Suit</a></td>";
echo "<td>$200.00</td>";
echo "</tr>";
echo "<td>AP018</td>";
echo "<td><a href=''>Wrinkle-free pant</a></td>";
echo "<td>$190.00</td>";
echo "</tr>";
echo "<td>AP020</td>";
echo "<td><a href=''>Wrinkle-free Shirt</a></td>";
echo "<td>$120.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>
</body>
</html>