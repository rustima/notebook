<?php
final class BaseClass {  //�趨Ϊfinal��
    public function test() {
        echo "BaseClass::test() called\n";
    }
    
    // �����������Ƿ񽫷�������Ϊfinal����û�й�ϵ
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass{}    //Fatal error: Class ChildClass may not inherit from final class (BaseClass)