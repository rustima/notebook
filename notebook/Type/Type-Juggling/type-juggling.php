<?php
//PHP在变量定义中不需要（或不支持）明确的类型定义；变量类型是根据使用该变量的上下文所决定的。也就是说，如果把一个string值赋给变量$var,$var就成了一个string.如果又把一个integer赋给$var，它又成了一个integer.
//PHP的自动类型转换的一个例子是乘法运算符"*".如果任何一个操作数是float，则所有的操作数都被当成float,结果也是float。否则操作数会被解释为integer,结果也是integer.注意这并没有改变这些操作数本身的类型;改变的仅是这些操作数如何被求值以及表达式本身的类型

$foo = "1";    //$foo是字符串(ASCII 49)
$foo *= 2;    //$foo 现在是一个整数(2)
$foo = $foo * 1.3;    //$foo 现在是一个浮点数(2.6)
$foo = 5 * "10 Little Piggies";    //$foo是整数(50)
$foo = 5 * "10 Small Pigs";    //$foo是整数(50)
var_dump($foo);
// echo "\$foo == $foo;type is ".gettype($foo)."<br />\n";

//自动转换为数组的行为目前没有定义。
//此外，由于PHP支持使用和数组下标同样的语法访问字符串下标，以下例子在所有PHP版本都有效：
$a = 'car';    //$a is a string
$a[0] = 1;    //$a is a string
$a[1] = 'b';    //$a is a string
echo $a;    //print 1br
echo gettype($a[0]);    //print string