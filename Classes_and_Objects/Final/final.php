<?php
//PHP5������final�ؼ��֡���������еķ���������Ϊfinal���������޷������������౻����Ϊfinal�����޷����̳�
//���Բ��ܱ�����Ϊ final��ֻ����ͷ������ܱ�����Ϊ final�� 
class BaseClass{
    public function test(){
        echo "BaseClass::test()called\n";
    }
    
    final public function moreTesting(){
        echo "BaseClass::moreTesting()called\n";
    }
    

}
class ChildClass extends BaseClass{  //Fatal error:Cannot override final method BaseClass::moreTesting()
    public function moreTesting(){}
}
//���⻰���������಻�ܸ��Ǹ����final������������಻���к͸����final��������ͬ�ķ�����������֮�������������Fatal error�������ȷ���ڸ����д���ͬ����final����