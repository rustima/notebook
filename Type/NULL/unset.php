<?php
//unset(mixed $var [,mixed $var2...]):void �ͷű��������ñ�����ȫ�ֱ�������ֻ�Ǿֲ����������٣����ڵ��û����еı���������unset()֮ǰָ����ֵ
function unset_foo(){
    global $foo;
    unset($foo);
    echo gettype($foo);    //NULL
}

$foo = 'foo1';
// echo $foo;
unset_foo();
echo $foo;    //foo1