<?php
$arr = array('a','b','c');
var_dump($arr);
foreach($arr as $intK =>$val){
    $arr["new".($intK+1)] = $intK."2";
}
var_dump($arr);