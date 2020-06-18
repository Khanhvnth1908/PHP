<?php
$connect = mysqli_connect("localhost","root","","publication");
if ($result = mysqli_query($connect,"select * from customer"))
{
    $rows = mysqli_num_rows($result);
    echo "The table contains $rows rows<br>";
}
?>