<?php
$conn = mysqli_connect('localhost', 'root', '', 'attend') or die("Unable to connect to database");

$uemail = $_POST['username'];
$upassword = $_POST['password'];
echo $uemail;
echo $upassword;

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {

    $email = $row["email"];
    $password = $row["password"];
    if(($uemail==$email)&&($upassword==$password))
{
    $data = $uemail;
$url = "/link/dashboard/index.php?data=" . urlencode($data);
header("Location: $url");
exit;
    
}
}
echo $email;
echo $password;



// header("Location: studentsignup.html");
// exit;
?>