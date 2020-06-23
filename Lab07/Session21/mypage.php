<?php
session_start();

$myname = $_SESSION['myname'];
?>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
Welcome <?php echo $myname ?> to MyPage.com <br>
</body>
</html>
