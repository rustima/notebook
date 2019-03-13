<?php
//继承多个接口
interface a{
    public function foo();
}

interface b{
    public function bar();
}

interface c extends a,b{
    public function baz();
}

class d implements c{    //所有父接口方法都要实现
    public function foo(){}
    public function bar(){}
    public function baz(){}
}
