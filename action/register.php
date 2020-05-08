<?php
include "../connectDB/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $birthday = $_REQUEST['birthday'];
    $stmt = $connect->prepare("INSERT INTO students(name,birthday,address,email,phone) VALUES (?,?,?,?,?)");
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$birthday);
    $stmt->bindParam(3,$address);
    $stmt->bindParam(4,$email);
    $stmt->bindParam(5,$phone);
    $stmt->execute();
        header('Location:../login/index.php');
}