<html>
<head>
    <title>User Information</title>
</head>
<body>
<?php

$myname = $_POST['myname'];
$myage = $_POST['myage'];
if ($myname==""){
    echo "Please enter your name";
}else{
    $meg = ($myage=="") ? "$myname, please enter your age!":
    "Hi $myname. Your age is $myage";
    echo $meg;
}
?>
<br>
<a href="info.html"> Back</a>
</body>
</html>