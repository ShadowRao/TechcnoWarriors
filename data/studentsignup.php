<?php
$conn = mysqli_connect('localhost', 'root', '', 'attend') or die("Unable to connect to database");

$usn = $_POST['usn'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO `student` (`usn`, `name`, `dob`, `phone`, `email`, `password`) VALUES ('$usn', '$name', '$dob', '$phone', '$email', '$email')";
$result = mysqli_query($conn, $sql);

header("Location: studentsignup.html");
exit;
?>