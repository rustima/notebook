<?php
//尝试静态方法调用非静态成员
class Foo{
    public static $v1 = "v1";
    public $v2 = "v2";
    public function non(){
        
    }
}