<?php
//����������ĳ��final��ķ���������д���Լ������У�����ʹ�����·���
final class Foo{
    public function doFoo(){
        echo "Basic-doFoo\n";
    }
}

final class FooD{
    private $foo;
    public function __construct(Foo $foo){
        $this->foo = $foo;    //������д��private $foo
    }
    
    public function doFoo(){
        $result = $this->foo->doFoo();    //����ԭfoo�ķ��������������������
        //�˴���$result���б༭
        return $result;
    }
}

$F = new Foo();    //ʵ����ԭFoo
// $F->doFoo();
$FD = new FooD($F);    //��������Ϊ��������FooD
$FD->doFoo();    //�ɹ����