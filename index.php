<?php
require "connnect.php";
global $conn;

$bh = mysqli_select_db($conn, "74DCHT23");

$id = isset($_POST["id"]) ? $_POST["id"] : null;
$fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : null;
$gob = isset($_POST["gob"]) ? $_POST["gob"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
$gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
$groupid = isset($_POST["group_id"]) ? $_POST["group_id"] : null;
$position = isset($_POST["position"]) ? $_POST["position"] : null;

if ($id && $fullname && $gob && $email && $phone && $gender && $groupid && $position) {
$addsql = "INSERT INTO danhsachlop(`id`, `fullname`, `gob`, `gender`, `email`, `group_id`, `position`, `phone`)
VALUES ('$id','$fullname','$gob','$gender','$email','$groupid','$position','$phone')";
mysqli_query($conn, $addsql);
}
