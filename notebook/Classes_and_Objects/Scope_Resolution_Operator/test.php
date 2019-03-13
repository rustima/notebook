<?php
/*范围解析操作符::
 * 用于访问静态成员，类常量，还可以用于覆盖类中的属性和方法。
 * 在类定义之外引用这些项目时要使用类名
 * 自5.3.0起可以用变量来引用类，该变量的值不能是关键字（如self,parent和static
 * 
 */

//在类外部使用::操作符
class MyClass{
    const CONST_VALUE = 'A constant value';
    public static $my = "my";
    public function test(){echo "test";}
}

$classname = 'Myclass';  //通过变量引用类

// echo $classname::CONST_VALUE;

// echo MyCLASS::CONST_VALUE;

// $classname->test(); //报错

echo $classname::$my; //调用静态成员时要加上$