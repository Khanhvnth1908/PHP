<html>
<body>
<?php
$to = "recipient1@example.com,recipient2@example.com,recipient3@example.com";
$from = "yourname@example.com";
for ($i = 0;$i < 3;$i++){
    $to[$i] = trim($to[$i]);
    $subject = "An example";
    $body = "This is an example for showing the usage of the mail() function.";
    $send = @mail($to,$subject,$body,$from);
    if ($send){
        echo "Mail was sent to all the address";
    }
    else{
        echo "Mail was'nt sent to all the address<br>";
    }
}
?>
</body>
</html>