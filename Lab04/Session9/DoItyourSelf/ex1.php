<?php
$fr_name = $_GET['n1text'];
$ls_name = $_GET['n2text'];
$salary = $_GET['n3text'];
echo "Employee Information<br>";
echo "First Name: $fr_name";
echo "<br>";
echo "Last Name: $ls_name";
echo "<br>";
echo "Salary: $salary$";
echo "<br>";
if ($salary>=4000 and $salary<=5000){
    $DA = $salary * 0.02;
    echo "DA = $DA$ <br>";
    $HRA = $salary * 0.05;
    echo "HRA = $HRA$ <br>";
    $tax = $salary * 0.05;
    echo "Tax = $tax$ <br>";
    $netSalary = $salary + $DA + $HRA -$tax;
    echo "Net Salary = $netSalary$";
}else if ($salary>=5001 and $salary<=6000){
    $DA = $salary * 0.02;
    echo "DA = $DA$ <br>";
    $HRA = $salary * 0.05;
    echo "HRA = $HRA$ <br>";
    $tax = $salary * 0.09;
    echo "Tax = $tax$ <br>";
    $netSalary = $salary + $DA + $HRA -$tax;
    echo "Net Salary = $netSalary$";
}else if ($salary>=6001){
    $DA = $salary * 0.02;
    echo "DA = $DA$ <br>";
    $HRA = $salary * 0.05;
    echo "HRA = $HRA$ <br>";
    $tax = $salary * 0.12;
    echo "Tax = $tax$ <br>";
    $netSalary = $salary + $DA + $HRA -$tax;
    echo "Net Salary = $netSalary$";
}