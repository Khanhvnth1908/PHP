<html>
<body>
<?php
error_reporting(0);
$multi = "D:/xampp/htdocs/email_list.txt";
$to_mail = file('email_list.txt');
$from = "yourname@emxample.com";

for ($i = 0;$i < count($to_mail);$i++){
    $to_mail[$i] = trim($to_mail[$i]);
    $to = implode(",",$to_mail);
    $subject = "An Example";
    $body = "This is an example for the mail() function.";
    mail($to,$subject,$body,$from);
    echo "Mail was sent to all address!!!";
}
?>
</body>
</html>