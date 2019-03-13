<?php
$mq = new mysqli();
$mq->connect("localhost","root","123456");
// echo $mq->get_server_info();
$mq->select_db("test");
$result = $mq->query("select * from table1");
// echo mysqli_fetch_lengths($result);
// echo $result->lengths;
var_dump($result);
// foreach($result->fetch_row() as $r){
//     echo $r;
// }
// while($row = $result->fetch_row()){
//     echo $row[0].$row[1];
// }