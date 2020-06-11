<?php
$age = $_GET['age'];
if($age >= 10 & $age <=19){
    echo "minor by accepting";
}
elseif ($age >= 11 & $age <= 16 )
{
    echo "teenager";
}
elseif ($age >= 18  & $age<=24)
{
    echo "senior";
}
elseif ($age > 24)
{
    echo "adult";
}
echo "<br><br><a href='user.html'>Go Back</a>"
?>