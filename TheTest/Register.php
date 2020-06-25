<?php
require_once "login.php";

$conn = new  mysqli($hn,$un,$pw,$db);
if ($conn->connect_errno)die("Fatal Error");

if (isset($_POST['submit'])){

    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])){

        $firstname = mysql_entities_fix_string($conn,$_POST['firstname']);
        $lastname = mysql_entities_fix_string($conn,$_POST['lastname']);
        $username = mysql_entities_fix_string($conn,$_POST['username']);
        $password = mysql_entities_fix_string($conn,$_POST['password']);

        if ($firstname== null || $lastname == null || $username == null || $password == null){
            echo "Please enter full information";
            echo "<a href='Register.html'>Come Back</a>";
        }else{
            $hash = password_hash($password,PASSWORD_DEFAULT);

            $query = "Insert into register(firstname,lastname,username,password) values ('$firstname','$lastname','$username','$hash')";
            $result = $conn->query($query);
            if (!$result) die("Doesn't Exist");
            else{
                $fullname = $lastname . ' ' . $firstname;
                echo "Congratulations on your successful registration,your name is $fullname";
                setcookie("fullname",$fullname);
                setcookie("username",$username, time()- 3600);
            }
        }
    }
    else die("Please enter full information");
}

function mysql_entities_fix_string($conn,$string){
    return htmlspecialchars(mysql_fix_string($conn,$string));
}

function mysql_fix_string($conn,$string){
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
}