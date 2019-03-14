<?php
// $a = 1;
// $b = 2;
// if($a = $b){
//     echo $a;
// }

$conn = new mysqli("localhost","root","123456");
$conn->select_db("test");
if(!$conn->error){
//     echo "yesa</br>";
//     $check = $conn->error;
//     var_dump($check);
    if($conn->query("select * from table1")){
        $check = $conn->error;
        var_dump($check);
    }else{
        var_dump(mysqli_error($conn));
    }
}else exit;