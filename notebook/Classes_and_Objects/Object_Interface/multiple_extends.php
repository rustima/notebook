<?php
class A{function a1(){echo "a1()";}}
interface B{function b1();}
class Son extends A implements B{
    function a1(){
        echo "Son1";
    }
    
    function b1(){
        echo "b1";
    }
}

$son = new Son();
$son->a1();
$son->b1();