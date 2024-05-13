<?php
echo $sid = $_GET['id'];

include 'config.php';
$sql = "DELETE from student WHERE sid={$sid}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful.");

header("location: http://localhost/Training/php/project/crud");
mysqli_close($conn);
