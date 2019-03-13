<?php
namespace notebook\classtest;
/*
 * 2019-2-23-16:49
 *
 *
 *
class A{
    public function A(){
        echo "Afunction<br />";   //若输出，则说明在创建对象时会自动执行
        return "AAA";
    }
}
$a = new A;
$a->A();    //并未作任何输出，然而再次执行echo

*/
class A{
    public function __construct(){
        echo "Afunction<br />";   //若输出，则说明在创建对象时会自动执行
        return "AAA";
    }
}
$a = new A;
var_dump($a);
// $a->__construct();    //并未作任何输出，然而再次执行echo