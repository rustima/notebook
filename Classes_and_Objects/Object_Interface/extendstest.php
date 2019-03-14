<?php
class A{function __construct(){echo "A";} function a1(){echo "a1()";}}
interface B{public const a = "a"; function b1();}
class Son extends A implements B{
//     public const a = "S";
    function __construct(){echo"b";}
    
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
echo $son::a;