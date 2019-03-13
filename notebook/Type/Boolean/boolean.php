<?php
//表示真值，为TRUE/FALSE
$foo = True; //$foo为Bool类型

//通常运算符所返回的布尔值结果会被传递给控制流程

// ==是检测两边的变量是否相等的运算符，结果返回布尔值
$action = PHP_VERSION;;
if($action == "7.2.10"){
    echo $action;
}

//这样做是不必要的
if($foo == TRUE){
    echo "true";
}

//因为可以使用这种方式
if($foo){
    echo "true";
}

echo "<br />--------------------------------------------------<br />\n";

/*转换为布尔值
 * converting to bool
 * 要明确地将一个值转换成boolean,用(bool)或者(boolean)来强制转换。但是很多情况下
 * 不需要强制转换，因为当运算符，函数或者控制流程结构需要一个boolean参数时，该值
 * 会被自动转换,参见类型转换的判别(http://php.net/manual/zh/language.types.type-juggling.php)
 */

/*
 * 当转换为boolean时，以下值被认为是false:
 * 布尔值FALSE本身
 * 整型值0（零）
 * 浮点型值0.0（零）
 * 空字符串，以及字符串"0"
 * 不包括任何元素的数组（空数组）
 * 特殊类型NULL（包括尚未赋值的变量）
 * 从空标记生成的SimpleXML对象
 * 
 * 所有的其他值被认为是TRUE（包括任何资源和NAN）
 * ps:-1和其他非零值（不论正负）一样被认为TRUE
 */
var_dump((bool)"");
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)