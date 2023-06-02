
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Great Work!";

$link = $_POST['link'];
?>
<br>

<?php
echo $link;

$output = shell_exec("python name.py $link");
?>
</body>
</html>



