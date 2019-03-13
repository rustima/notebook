<?php
$dbms='mysql';     //数据库类型
$host='localhost'; //数据库主机名
$dbName='test';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='123456';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
$a = new PDO($dsn,$user,$pass);
$arr = '';
foreach($a->query("select * from table1") as $row){
    $arr = $row;
}
var_dump($arr);
try{
if(1){
    throw new exception('falsefa');
}}catch(Exception $e){
    echo "发生异常: ".$e->getMessage();
}