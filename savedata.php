<?php
echo $sname = $_POST['sname'];
echo $saddress = $_POST['saddress'];
echo $sclass = $_POST['sclass'];
echo $sphone = $_POST['sphone'];



include 'config.php';
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$sname}','{$saddress}','{$sclass}','{$sphone}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful.");
header("location: http://localhost/Training/php/project/crud");
mysqli_close($conn);
