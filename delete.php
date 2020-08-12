<?php
include 'conn.php';

$SlNo =$_GET['SlNo'];

$q = "delete from information where SlNo = $SlNo";

mysqli_query($con,$q);

header('location:display.php');
?>