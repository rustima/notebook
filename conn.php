<?php
/*mysqli_note
 * 
 * mysqli->affected_rows    返回前一个 Mysql 操作的受影响行数。
 * 
 * 
 */
//if()中，()里的内容已经执行了所以可以直接获取结果?

$mysqli1 = new mysqli("localhost","root","123456","phpmyadmin");

$query = "select * from pma__bookmark";

$query1 = "INSERT INTO pma__bookmark (`id`, `dbase`, `user`, `label`, `query`) VALUES ('0004', 'd4', 'user4', 'l4', 'q4')";
$query1 = "INSERT INTO pma__bookmark (id, dbase, user, label, query) VALUES ('0004', 'd4', 'user4', 'l4', 'q4')";
$query2 = "DELETE FROM pma__bookmark WHERE id = 4";
$query3 = "update pma__bookmark set id = '0044' where id = '0004' ";

mysqli_query($mysqli1,$query1);

mysqli_query($mysqli1,$query3);

$result = mysqli_query($mysqli1,$query);

// $fetch = mysqli_fetch_row($result);
while(($row = mysqli_fetch_row($result))!=false){
    $list[] = $row;
}
print_r($list);
var_dump($query2);
// echo (json_encode($fetch));
// var_dump($result);
// var_dump($mysqli1);
// if($mysqli1)print"yesif";
// else print"noif";
// $a = $mysqli1->character_set_name();
// var_dump($a);
// print ($mysqli1->errno);