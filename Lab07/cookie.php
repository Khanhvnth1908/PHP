<html>
<body>
<?php
$test = "false";
if (isset($_COOKIE['test'])) $test = $_COOKIE['test'];
echo "<p>The values of the cookie 'test' is: $test</p>";
setcookie('test','I love Cookie');

//
setcookie("cookie[three]","cookiethree");
setcookie("cookie[two]","cookietwo");
setcookie("cookie[one]","cookieone");

//after

if (isset($_COOKIE['cookie'])){
    foreach ($_COOKIE['cookie'] as $name=>$value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br>\n";
    }
}
?>
</body>
</html>