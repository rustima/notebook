<?php
/*在不同目录中的同名文件的解决方案，就是命名空间的创造意义
*主要解决编写类库或应用程序时创建可重用的代码如类或函数时碰到的两类问题:
*1.用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突
*2.为很长的标识符名称（通常是为了缓解第一类问题而定义的）创建一个别名的名称，提高代码可读性
*/
namespace notebook\namespacetest;    //就算不是当前目录也可以成功
class MyClass{function __construct(){echo"myclass";}}
function myfunction(){}
const MYCONST = 1;
namespace a2;
// $a = new MyClass;        //错例
$b = new \notebook\namespacetest\MyClass();
