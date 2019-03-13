<?php
//unset(mixed $var [,mixed $var2...]):void 释放变量，若该变量是全局变量，则只是局部变量被销毁，而在调用环境中的变量将保持unset()之前指定的值
function unset_foo(){
    global $foo;
    unset($foo);
    echo gettype($foo);    //NULL
}

$foo = 'foo1';
// echo $foo;
unset_foo();
echo $foo;    //foo1