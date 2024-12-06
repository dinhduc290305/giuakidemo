<?php
require_once('connnect.php');
global $conn;
$hmid=$_GET['hid'];
require_once("index.php");
$delete_sql="DELETE FROM danhsachlop WHERE id='$hmid'";
mysqli_query($conn,$delete_sql);
header("location:display.php");