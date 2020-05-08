<?php
include_once "../connectDB/connect.php";
$id = $_REQUEST['id'];
$sql = "delete from books where code = ?";
$stmt = $connect->prepare($sql);
$stmt->bindParam(1,$id);
$stmt->execute();
header('location:../books/list.php');