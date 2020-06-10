<?php
$name = $_GET['name'];
$memberShip = $_GET['memberShip'];
$typeMember = $_GET['typeMember'];
$point = $_GET['point'];
echo "Your name is $name";
echo "<br>";
echo "memberShip: $memberShip";
echo "<br>";
echo "Type of MemberShip: $typeMember";
echo "<br>";
echo "The Point in Hand: $point";
echo "<br>";
echo "<br>";
echo "Addition amount of point avaiable and the total amount of point";
echo "<br>";
echo "<br>";
if ($point>0 and $point<=250){
    echo "Basic MemberShip :";
    echo "<br>";
    $additional = $point * 0.05;
    echo "Additional amount of point = $additional";
    echo "<br>";
    $total = $additional + $point;
    echo "Total amount of point = $total";
    echo "<br>";
    echo "<br>";
    //
    echo "Privileged Member : ";
    echo "<br>";
    $additional2 = $point * 0.1;
    echo "Additional amount of point = $additional2";
    echo "<br>";
    $total2 = $additional2 + $point;
    echo "Total amount of point = $total2";

}elseif ($point>=251 and $point <=500){
    echo "Basic MemberShip :";
    echo "<br>";
    $additional = $point * 0.075;
    echo "Additional amount of point = $additional";
    echo "<br>";
    $total = $additional + $point;
    echo "Total amount of point = $total";
    echo "<br>";
    echo "<br>";

    //
    echo "Privileged Member : ";
    echo "<br>";
    $additional2 = $point * 12.5 / 100;
    echo "Additional amount of point = $additional2";
    echo "<br>";
    $total2 = $additional2 + $point;
    echo "Total amount of point = $total2";
}elseif ($point>=501 and $point<= 750){
    echo "Basic MemberShip :";
    echo "<br>";
    $additional = $point * 0.1;
    echo "Additional amount of point = $additional";
    echo "<br>";
    $total = $additional + $point;
    echo "Total amount of point = $total";
    echo "<br>";
    echo "<br>";
    //
    echo "Privileged Member : ";
    echo "<br>";
    $additional2 = $point * 0.15;
    echo "Additional amount of point = $additional2";
    echo "<br>";
    $total2 = $additional2 + $point;
    echo "Total amount of point = $total2";
}elseif ($point>=751 and $point<=1000){
    echo "Basic MemberShip :";
    echo "<br>";
    $additional = $point * 12.5 /100;
    echo "Additional amount of point = $additional";
    echo "<br>";
    $total = $additional + $point;
    echo "Total amount of point = $total";
    echo "<br>";
    echo "<br>";
    //
    echo "Privileged Member : ";
    echo "<br>";
    $additional2 = $point * 17.5 / 100;
    echo "Additional amount of point = $additional2";
    echo "<br>";
    $total2 = $additional2 + $point;
    echo "Total amount of point = $total2";
}