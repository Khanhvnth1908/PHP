<html>
<body>
<?php
$frname = $_GET['frName'];
$lsname = $_GET['lsName'];
$phone = $_GET['phone'];
$qualification = $_GET['qualification'];
$experience = $_GET['experience'];
$dept = $_GET['dept'];

echo "First Name : $frname";
echo "<br>";
echo "Last Name : $lsname";
echo "<br>";
echo "Phone : $phone";
echo "<br>";
echo "Qualification : $qualification";
echo "<br>";
echo "Experience : $experience";
echo "<br>";
echo "<br>";

switch ($dept){
    case "IT":
        echo "Post Available";
        echo "<br>";
        echo "<br>";
        echo "Software Developer, Graphic Designer,Web Designer,and Technical Support";
        break;
    case "Fiance":
        echo "Post Available";
        echo "<br>";
        echo "<br>";
        echo "Cost Analyst, Chartered Accountant,Company Secretary,Accountant,and Auditor";
        break;
    case "Sales":
        echo "Post Available";
        echo "<br>";
        echo "<br>";
        echo "Sales Executive, Sales Manager and Sales Analyst";
        break;
        }
?>

</body>
</html>
