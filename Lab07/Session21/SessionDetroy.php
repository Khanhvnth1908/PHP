<?php
session_start();

$myname = $_SESSION['myname'];
session_unset();
session_destroy();
echo "Session Destroyed";
?>

<html>
<head>
    <title>Session</title>
</head>
<body>
<br>
<a href="mypage.php"> Home page of Mypage.com</a>
</body>
</html>