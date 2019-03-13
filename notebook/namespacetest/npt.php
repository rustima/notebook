<?php
namespace npt\npt1;
class foo{
    function __construct(){
        echo 'n1';
    }
}

namespace npt\npt2;
class foo{
    function __construct(){
        echo 'n2';
    }
}

new foo(); //n2
new \npt\npt2\foo();    //注意：此时目录：npt\npt2\，所以要写全只能使用绝对路径

new \npt\npt1\foo();  //n1

// use npt\npt1\foo;

// new foo();  //false

use npt\npt1;

new npt1\foo();    //use命名空间之后直接以命名空间最后一个\实例化，意味着use之后的代码都是以npt\npt1为初始路径（效果等同于as npt1)，此时在npt1前不能加\
new \npt\npt2\foo();  //由于命名空间已经转变为npt1,所以调用npt2要从主目录开始
// use npt\npt1 as n1;
// new n1\foo();