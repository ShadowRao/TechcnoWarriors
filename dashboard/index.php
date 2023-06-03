<?php
$conn = mysqli_connect('localhost', 'root', '', 'attend') or die("Unable to connect to database");


$receivedData = $_GET['data'];
echo $receivedData;
$sql = "SELECT * FROM student WHERE email = '$receivedData'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $name=$row["name"];
}

$count1=0;
$sql1 = "SELECT * FROM attendance WHERE email = '$receivedData' AND cid = '1'";
$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_assoc()) {
  $count1=$count1+1;
}

$count2=0;
$sql2 = "SELECT * FROM attendance WHERE email = '$receivedData' AND cid = '2'";
$result2 = $conn->query($sql2);
while ($row1 = $result2->fetch_assoc()) {
  $count2=$count2+1;
}

$count3=0;
$sql3 = "SELECT * FROM attendance WHERE email = '$receivedData' AND cid = '3'";
$result3 = $conn->query($sql3);
while ($row1 = $result3->fetch_assoc()) {
  $count3=$count3+1;
}

$count4=0;
$sql4 = "SELECT * FROM attendance WHERE email = '$receivedData' AND cid = '4'";
$result4 = $conn->query($sql4);
while ($row1 = $result4->fetch_assoc()) {
  $count4=$count4+1;
}

$count5=0;
$sql5 = "SELECT * FROM attendance WHERE email = '$receivedData' AND cid = '5'";
$result5 = $conn->query($sql5);
while ($row1 = $result5->fetch_assoc()) {
  $count5=$count5+1;
}


if ($result1) {
  $row1 = mysqli_fetch_array($result1);
  $count = $row1[0]; // The count value is in the first column (index 0)
} else {
  echo "Query failed";
}
// $sql2 = "SELECT * FROM attdenace WHERE email = '$receivedData'";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo">
        <a href="#">
          <img style="padding-right: 100px;"
            src="logo-removebg-preview.png"
            alt="Logo"
          />
        </a>
      </div>

      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="fa fa-home"></span>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="fa fas fa-book"></span>
              <span><?php echo $name; ?></span>
            </a>
          </li>

          <li>
          </li>
        </ul>
      </div>

      <div class="navigation">
        <ul>
          <li>
          </li>

          <li>
          </li>
        </ul>
      </div>

      <div class="policies">
        <ul>
          <li>
            <a href="#">Cookies</a>
          </li>
          <li>
            <a href="#">Privacy</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons">
        </div>

        <div class="navbar">
          <ul>
            <li>
            </li>
            <li>
            </li>
            <li>
            </li>
            <li class="divider"></li>
            <li>
              <a href="https://github.com/ShadowRao/TechcnoWarriors">Attend Missed Class</a>
            </li>
          </ul>
          <button type="button">Generate Questions</button>
        </div>
      </div>

      <div class="spotify-playlists">
        <h2>Classes</h2>

        <div class="list">
          <div class="item">
            <h4>Class 1</h4>
            <p><?php echo $count1;?></p>
            <p>Class code</p>
          </div>
          <div class="list">
          <div class="item">
            <h4>Class 2</h4>
            <p><?php echo $count2;?></p>
            <p>Class code</p>
          </div>
          <div class="list">
          <div class="item">
            <h4>Class 3</h4>
            <p><?php echo $count3;?></p>
            <p>Class code</p>
          </div>
          <div class="list">
          <div class="item">
            <h4>Class 4</h4>
            <p><?php echo $count4;?></p>
            <p>Class code</p>
          </div>
          <div class="list">
          <div class="item">
            <h4>Class 5</h4>
            <p><?php echo $count5;?></p>
            <p>Class code</p>
          </div>
        </div>
      </div>
     

    <script
      src="https://kit.fontawesome.com/23cecef777.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
