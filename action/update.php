<?php
include_once "../connectDB/connect.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $author = $_REQUEST['author'];
    $price = $_REQUEST['price'];
    $category = $_REQUEST['category'];
    $status = $_REQUEST['status'];
    $sql = "update `books` set `name`= ?,`author` = ?,`price` = ?, `category_id`= ?, `status`=? where `code` = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $author);
    $stmt->bindParam(3, $price);
    $stmt->bindParam(4, $category);
    $stmt->bindParam(5, $status);
    $stmt->bindParam(6, $id);
//    $stmt->bindParam(6, $status);
    $update = $stmt->execute();
    header('location:../books/list.php');
}