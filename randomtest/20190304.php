<?php
//�������չʾ��ʹ�� foreach ʱ�������������ĵ���˳��
class myIterator implements Iterator{
    private $position = 0;
    private $array = array(
        "a1",
        "a2",
        "a3",
    );
    function __construct(){
        $this->position = 0;
    }
    
    function rewind(){
        var_dump(__METHOD__);
        return $this->array[$this->position];
    } 
    
    function current(){
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }
    
    function key(){
        var_dump(__METHOD__);
        return $this->position;
    }
    
    function next(){
        var_dump(__METHOD__);
        ++$this->position;
    }
    
    function valid(){
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it =new myIterator;
foreach($it as $key=>$value){
    var_dump($key,$value);
//     echo $key."->".$value;
    echo "\n";
}