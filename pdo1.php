<?php
include 'pdo.php';
$pdo = new PDOtest("localhost","root","123456","test");
// echo $pdo->hostname;

$conn = $pdo->conn();
// var_dump($conn);
$result = $pdo->query($conn,"select * from table1");
$fetch = $pdo->fetch($result);
var_dump($fetch);