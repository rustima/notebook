<?php
//self是指向当前类的指针
class Foo{
    public static $s1 = "s1";
    public $t1 = "t1";
    public function Selftest(){
        echo self::$s1;
    }
}