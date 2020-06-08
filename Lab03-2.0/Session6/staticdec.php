<html>
<head>
    <title></title>
</head>
<body>

<?php
function decrement(){
    static $static_int = 99;
    $static_int--;
    echo "The decrement value is $static_int";
}
decrement();
echo "<br>";
decrement();
?>
</body>
</html>