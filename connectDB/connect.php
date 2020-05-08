<?php
try {
    $connect = new PDO('mysql:host=localhost;dbname=try', 'root', '');

} catch (PDOException $e) {
    print "Error";
    echo $e->getMessage();
    exit();
}