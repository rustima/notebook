<?php
namespace notebook\classtest;
/*
 * 2019-2-23-16:49
 *
 *
 *
class A{
    public function A(){
        echo "Afunction<br />";   //���������˵���ڴ�������ʱ���Զ�ִ��
        return "AAA";
    }
}
$a = new A;
$a->A();    //��δ���κ������Ȼ���ٴ�ִ��echo

*/
class A{
    public function __construct(){
        echo "Afunction<br />";   //���������˵���ڴ�������ʱ���Զ�ִ��
        return "AAA";
    }
}
$a = new A;
var_dump($a);
// $a->__construct();    //��δ���κ������Ȼ���ٴ�ִ��echo