<?php

$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];
include 'config.php';
$sql = "UPDATE student SET sname='$sname', saddress='$saddress', sclass='$sclass', sphone='$sphone'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful.");
header("location: http://localhost/Training/php/project/crud/index.php");
mysqli_close($conn);
