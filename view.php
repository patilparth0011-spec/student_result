<?php
$conn = new mysqli("localhost", "root", "root123", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM results");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Students Result</title>

<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg,#667eea,#764ba2);
    color: white;
    text-align: center;
}

h2 {
    margin-top: 30px;
}

table {
    margin: 30px auto;
    border-collapse: collapse;
    width: 80%;
    background: white;
    color: black;
    border-radius: 10px;
    overflow: hidden;
}

th {
    background: #667eea;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background: #f1f1f1;
}
</style>

</head>

<body>

<h2>All Students Result</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>M1</th>
    <th>M2</th>
    <th>M3</th>
    <th>Total</th>
    <th>Percentage</th>
    <th>Grade</th>
    <th>CGPA</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['m1']."</td>";
    echo "<td>".$row['m2']."</td>";
    echo "<td>".$row['m3']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "<td>".$row['percentage']."</td>";
    echo "<td>".$row['grade']."</td>";
    echo "<td>".$row['cgpa']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>