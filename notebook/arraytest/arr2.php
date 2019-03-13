<?php
//获取key和value，检查类型
$arr1 = ["a1","a2","a3","a4"];
$arr2 = ["n1"=>"a1","n2"=>"a2","n3"=>"a3","n4"=>"a4"];
$arr3 = [2=>"a1","3"=>"a2","n3"=>"a3"];
var_dump(key($arr3));
echo "-------------\r----------";
next($arr3);
var_dump(key($arr3));
echo "\n\n-------------\r----------";
next($arr3);
var_dump(key($arr3));
echo "\n\n-------------\r----------";
$arr2[] = $arr1;
foreach($arr1 as $arr1){
    $arr2[] = $arr1;
}
    
var_dump($arr2);