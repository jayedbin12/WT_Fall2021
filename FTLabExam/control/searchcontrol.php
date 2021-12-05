<?php
include('../model/db.php');

$error="";
// store session data
if (isset($_POST['submit'])) {

$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Salary=$_POST['Salary'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchID($conobj,"employee",$ID);

$userQuery=$connection->SearchName($conobj,"employee",$Name);

$userQuery=$connection->SearchSalary($conobj,"employee",$Salary);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Salary</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No results";
  }

$connection->CloseCon($conobj);
}
?>