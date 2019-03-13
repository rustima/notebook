<?php
$arr1 = ["a1","a2","a3","a4"];
$arr2 = ["n1"=>"a1","n2"=>"a2","n3"=>"a3","n4"=>"a4"];
$arr3 = [2=>"a1","3"=>"a2","n3"=>"a3"];
$c = array();
foreach($arr1 as &$a){
//     echo "current:".key($arr1).":"."<br />--------------<br />";
//     echo $c += $a."<br />--------------<br />";
array_push($c,$a);
}
var_dump($c);
unset($arr1);
// echo "<br />$c";