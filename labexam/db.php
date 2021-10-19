<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "aiub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$hsc = mysqli_real_escape_string($conn, $_REQUEST['hsc']);
$ssc = mysqli_real_escape_string($conn, $_REQUEST['ssc']);
$course = mysqli_real_escape_string($conn, $_REQUEST['course']);
$yenroll = mysqli_real_escape_string($conn, $_REQUEST['yenroll']);
$menroll = mysqli_real_escape_string($conn, $_REQUEST['menroll']);

$sql = "INSERT INTO new_students (fname, lname, email, gender, mobile, dob, hsc, ssc, course, yenroll, menroll) VALUES ('$fname','$lname','$email','$gender','$mobile','$dob',$hsc,'$ssc','$course','$yenroll','$menroll')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();
?>