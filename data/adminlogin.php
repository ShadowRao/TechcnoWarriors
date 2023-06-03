<?php
$conn = mysqli_connect('localhost', 'root', '', 'attend') or die("Unable to connect to database");

$uemail = $_POST['username'];
$upassword = $_POST['password'];


$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {

    $email = $row["email"];
    $password = $row["passwd"];
}

if(($uemail==$email)&&($upassword==$password))
{
    header("Location: /link/dashboard/admindashboard.html");
}
// header("Location: studentsignup.html");
// exit;
?>