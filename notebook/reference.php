<?php 
$a = 1;
$b = 0;
$a1 = &$a;
$a1++;
echo $a;
echo "<br />-------------------<br />";
$arr = array(1,2,3,4,5);
$arr1 = &$arr;

var_dump($arr1);
echo "<br />-------------------<br />";
array_push($arr1, 6);
$arr = array();
var_dump($arr);
?>