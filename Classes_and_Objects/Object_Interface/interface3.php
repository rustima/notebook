<?php
//�̳ж���ӿ�
interface a{
    public function foo();
}

interface b{
    public function bar();
}

interface c extends a,b{
    public function baz();
}

class d implements c{    //���и��ӿڷ�����Ҫʵ��
    public function foo(){}
    public function bar(){}
    public function baz(){}
}
