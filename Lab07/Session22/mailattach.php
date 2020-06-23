<?php
$files = "D:/xampp/htdocs/example.txt";

$to = "recipient@example.com";
$from = "yourname@example.com";
$subject = "Test-email.com";
$message = "Sample message";
$headers = "From: $from";


$semi_rand = md5(time());
$mime_boundry = "==Multipart_Boundary_x{$semi_rand}x";


$headers.= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed";
            "\n" . "boundary=\" {$mime_boundry}\"";

$message = "This is an example for email attachment in MIME format \n\n"
    . "--{$mime_boundry}" . "Content-Type: text/plain; charset=\"isc-8859-1\"\n"
    . $message .  "\n\n";

$message .= "--{$mime_boundry}\n";

$file = fopen($files,"rb");
$content = fread($file,filesize($files));
fclose($file);

$message .= "Content-Type: {\"application/octet-stream\"};\n" . "name=\"$file\"\n" . "Content-Disposition: attachment;\n"
    . " filename=\"$files\"\n" . $content . "\n\n";

$message .= "--{$mime_boundry}\n";
//
$send_mail = @mail($to,$subject,$message,$headers);
if ($send_mail){
    echo "Mail sent to $to";
}
else{
    "Mail could not be sent to $to";
}