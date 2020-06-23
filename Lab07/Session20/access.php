
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
echo "<td>A001</td>";
echo "<td><a href=''>Diamond Bracelet</a></td>";
echo "<td>$95.00</td>";
echo "</tr>";
echo "<td>A006</td>";
echo "<td><a href=''>Diamond Ring</a></td>";
echo "<td>$80.00</td>";
echo "</tr>";
echo "<td>A012</td>";
echo "<td><a href=''>Diamond Earrigs</a></td>";
echo "<td>$50.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>
</body>
</html>