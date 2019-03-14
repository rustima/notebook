<?php
/*特殊的NULL值表示一个变量没有值。NULL类型唯一可能的值就是NULL。
 * 在下列情况下一个变量被认为是NULL：
 * 1.被赋值为NULL
 * 2.未被赋值
 * 3.被unset()
 * 
 * NULL类型只有一个值，就是不区分大小写的常量NULL
 * 
 */
$var = NULL;
// $var = null;

//判断是否NULL:is_null(mixed $var):bool 如果var是null则返回TRUE，否则返回FALSE
var_dump(is_null($var));    //true
echo is_null($var)."<br />";    //1

//转换到NULL：使用(unset)$var将一个变量转换为NULL将不会删除该变量或unset其值，而是返回NULL值
unset($var);
var_dump($var);    //null