<?php 
/*
 * 对象接口
 * 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
 * 接口是通过interface关键字来定义的，就像定义标准的类一样，但其中定义的所有方法都是空的。
 * 接口中定义的所有方法都必须是公有，这是接口的特性
 * 
 * 实现(implements)
 * 要实现一个接口，使用implements操作符。类中必须实现接口中定义的所有方法，否则会报致命错误。
 * 类可以实现多个接口，用逗号来分隔多个接口的名称
 * 实现多个接口时，接口中的方法不能重名。
 * 接口也可以继承，使用extends操作符
 * 类要实现接口，必须使用和接口中所定义的方法完全一致的方式。否则会导致致命错误
 * 
 * 常量
 * 接口中也可以定义常量。接口常量和类常量的使用完全相同。但是不能被子类或子接口覆盖
 * 
 */

//声明一个'iTemplate'接口
interface iTemplate{
    public function setVariable($name,$var);
    public function getHtml($template);
}

//实现接口
class Template implements iTemplate{
    private $vars = array();
    
    public function setVariable($name,$var){
        $this->vars[$name] = $var;
    }
    
    public function getVariable(){
        return $this->vars;
    }
    
    public function getHtml($template){
        foreach ($this->vars as $name => $value){
            $template = str_replace('{'.$name.'}',$value,$template);
        }
        
        return $template;
    }
}

$test = new Template();
$test->setVariable("name1","var1");
// var_dump($test->getVariable());
var_dump($test->getHtml("{name1}template"));
?>