<?php
//self��ָ��ǰ���ָ��
class Foo{
    public static $s1 = "s1";
    public $t1 = "t1";
    public function Selftest(){
        echo self::$s1;
    }
}