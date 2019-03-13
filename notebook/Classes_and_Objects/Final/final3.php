<?php
//如果你想调用某个final类的方法并将它写入自己的类中，可以使用如下方法
final class Foo{
    public function doFoo(){
        echo "Basic-doFoo\n";
    }
}

final class FooD{
    private $foo;
    public function __construct(Foo $foo){
        $this->foo = $foo;    //将对象写入private $foo
    }
    
    public function doFoo(){
        $result = $this->foo->doFoo();    //调用原foo的方法，并将结果赋给变量
        //此处对$result进行编辑
        return $result;
    }
}

$F = new Foo();    //实例化原Foo
// $F->doFoo();
$FD = new FooD($F);    //将对象作为参数交给FooD
$FD->doFoo();    //成功输出