<?php
include "../connectDB/connect.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameacount = $_REQUEST['currentacount'];
    $newpassword = $_REQUEST['newpassword'];
    $comfirmpassword = $_REQUEST['comfirmpassword'];
    if ($newpassword == $comfirmpassword) {
        $changepassword = $connect->prepare("UPDATE users SET password='$newpassword' WHERE name = ?");
        $changepassword->bindParam(1,$_SESSION['name']);
        // vẫn thiếu điều kiện chuẩn để tìm chỗ thay thế trong database vì mk trong db trùng nhau sẽ bị thay hết;
        $changepassword->execute();
    } else {
        // cần có 1 thông báo lỗi nên mk chưa được thay đổi
        header('Location:index.php');
    }
    if ($changepassword) {
        header('Location:../index.php');
    }
}