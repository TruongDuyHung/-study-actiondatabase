<?php
include "../connectDB/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name= $_REQUEST['name'];
$author= $_REQUEST['author'];
$price= $_REQUEST['price'];
$caterory = $_REQUEST['category'];
$sql = "insert into books(name,author,price,category_id,status) values (?,?,?,?,1)";
$stmt = $connect->prepare($sql);
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$author);
$stmt->bindParam(3,$price);
$stmt->bindParam(4,$caterory);
$stmt->execute();
header('location:../books/list.php');
}
?>