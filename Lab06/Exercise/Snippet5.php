<?php
$connect_mysqpl = mysqli_connect("localhost","root","","publication");
$result = mysqli_query($connect_mysqpl,"select * from customer");
while ($row = mysqli_fetch_row($result)) {
    printf("%s (%s)\n", $row[0], $row[1]);
    echo "<br>";
}