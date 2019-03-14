<?php
//PHP5新增了final关键字。如果父类中的方法被声明为final，则子类无法覆盖它；若类被声明为final，则无法被继承
//属性不能被定义为 final，只有类和方法才能被定义为 final。 
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
//题外话，由于子类不能覆盖父类的final方法，因此子类不能有和父类的final方法名相同的方法名。换言之，当出现了这个Fatal error，你就能确定在父类中存在同名的final方法