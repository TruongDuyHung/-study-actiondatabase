<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $_SESSION['name']= $name;
    include_once '../connectDB/connect.php';
    $stmt = $connect->prepare("SELECT `name`,`password` from users where name=? and password = ?");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result) {
        $_SESSION['loginName'] = $result;
        header('Location:../admin/index.php');
    } else {
        $_SESSION['errorlogin'] = 'account or password is fail';
        header('location:../login/index.php');
    }
}