<?php
$conn = new mysqli("localhost", "root", "Panu@1011", "student_db");

$name = $_POST['name'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];

$total = $m1 + $m2 + $m3;
$percentage = $total / 3;

if ($percentage >= 75) $grade = "A";
elseif ($percentage >= 60) $grade = "B";
elseif ($percentage >= 50) $grade = "C";
elseif ($percentage >= 40) $grade = "D";
else $grade = "FAIL";

$cgpa = $percentage / 9.5;

$sql = "INSERT INTO results (name,m1,m2,m3,total,percentage,result)
VALUES ('$name','$m1','$m2','$m3','$total','$percentage','$grade')";

$conn->query($sql);

echo "<div style='text-align:center;font-family:Arial'>";
echo "<h2>Result</h2>";
echo "Name: $name <br>";
echo "Total: $total <br>";
echo "Percentage: $percentage% <br>";
echo "Grade: $grade <br>";
echo "CGPA: ".round($cgpa,2);
echo "</div>";

$conn->close();
?>