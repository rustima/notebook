<?php
class test{
    function test(){
        echo "t";
    }
    function test2(){
        echo "t2";
    }
}
//静态调用非静态方法，对类同名的方法无效
test::test2();
test::test();