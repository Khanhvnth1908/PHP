<html>
<body>
<h1>Customer</h1>
<?php
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_errno) die("Fara Error");

$query = "Select * from customer";
$result = $conn->query($query);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;

for ($j = 0;$j < $rows;++$j){
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo "Name: " . $row['name'] . '<br>';
    echo "ISBN: " . $row['isbn'] . '<br><br>';
}

$result->close();
$conn->close();
?>
</body>
</html>