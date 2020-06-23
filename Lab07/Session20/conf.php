<html>
<head>
    Confectionery Details
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
    echo "<td>C001</td>";
    echo "<td><a href=''>Vanilla crush</a></td>";
    echo "<td>$4.00</td>";
    echo "</tr>";
    echo "<td>C002</td>";
    echo "<td><a href=''>Choco chunks</a></td>";
    echo "<td>$7.00</td>";
    echo "</tr>";
    echo "<td>C003</td>";
    echo "<td><a href=''>Strawberry Delight</a></td>";
    echo "<td>$9.00</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
?>
</body>
</html>