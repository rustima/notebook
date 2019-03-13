<?php
//研究数组内指针
/*current():取得目前指针位置的内容资料(值)
 * key():读取目前指针所指向资料的索引值（键值）
 * next():将数组内部的指针前进一位
 * prev():将数组内部的指针后退一位
 * end():将数组内部指针指向最后一个元素
 * reset()将目前指针无条件移至第一个索引位置
 * 这些函数的参数都有且只有一个：要操作的数组本身
 */
$arr1 = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");
echo current($arr1)."<br />";
echo "key:".key($arr1)."<br />";
echo "next:".next($arr1)."<br />";

echo "current:".current($arr1);