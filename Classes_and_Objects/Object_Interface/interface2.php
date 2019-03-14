<?php
//可扩充的接口
interface a{
    public function foo();
}

interface b extends a{
    public function baz(Baz $baz);
}

class c implements b{
    
    public function foo(){}
    
    public function baz(Baz1 $baz){} //此处的参数必须和b的参数类型相同，否则会报错
}