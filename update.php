<?php
$oid = $_POST['oid'];
$fullname = $_POST["fullname"];
$gob = $_POST["gob"] ;
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender =$_POST["gender"];
$group_id = $_POST["group_id"];
$position =$_POST["position"] ;
$id = $_POST['id'];
require_once('connnect.php');
global $conn;
$update_sql = "UPDATE danhsachlop SET id='$id',fullname='$fullname', gob='$gob', email='$email', 
                       phone='$phone', gender='$gender', group_id='$group_id', position='$position' WHERE id='$oid'";
mysqli_query($conn, $update_sql);
header("location:display.php");
?>
