<?php
//异常（Exception）用于在指定的错误发生时改变脚本的正常流程。
/*什么是异常？
PHP 5 提供了一种新的面向对象的错误处理方法。
异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。
当异常被触发时，通常会发生：
1.当前代码状态被保存
2.代码执行被切换到预定义的异常处理器函数
3.根据情况，处理器也许会从保存的代码状态重新开始执行代码，终止脚本执行，或从代码中另外的位置继续执行脚本
我们将展示不同的错误处理方法：
1.异常的基本使用
2.创建自定义的异常处理器
3.多个异常
4.重新抛出异常
5.设置顶层异常处理器
*/

/*异常的基本使用
 * 当异常被抛出时，其后的代码不会继续执行，PHP 会尝试查找匹配的 "catch" 代码块。
如果异常没有被捕获，而且又没用使用 set_exception_handler() 作相应的处理的话，
那么将发生一个严重的错误（致命错误），并且输出 "Uncaught Exception" （未捕获异常）的错误消息。 
让我们尝试抛出一个异常，同时不去捕获它：
*/
//create function with an exception
function check($num){
    if($num>1){
        throw new Exception("value>1");
    }
    return true;
}

//trigger exception
// check(2);
/*上面的代码会获得类似这样的一个错误：
( ! ) Fatal error: Uncaught Exception: value>1 in C:\xampp\htdocs\notebook\Error_Exception\Exception\Exception2.php on line 27
( ! ) Exception: value>1 in C:\xampp\htdocs\notebook\Error_Exception\Exception\Exception2.php on line 27
*/

/*Try, throw 和 catch
 * 要避免上面例子出现的错误，我们需要创建适当的代码来处理异常。
正确的处理程序应当包括：
Try - 使用异常的函数应该位于 "try" 代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。
Throw - 这里规定如何触发异常。每一个 "throw" 必须对应至少一个 "catch"
Catch - "catch" 代码块会捕获异常，并创建一个包含异常信息的对象
让我们触发一个异常：
 */

//创建可抛出一个异常的函数
function checknum($num){
    if($num>1){
        throw new Exception("value>1");    //设定异常抛出的方式和抛出信息
    }
    return true;
}


//在"try"代码中触发异常
try{
    checknum(2);
    //如果异常被抛出，下面的信息不会被输出
    echo 'if you see me,the num is 1 or below';
}

//捕获异常
catch(Exception $e){
    echo 'Message:'.$e->getMessage();    //输出抛出异常信息
}
//结果：Message:value>1

/*上面的代码抛出了一个异常，并捕获了它：
创建 checkNum() 函数。它检测数字是否大于 1。如果是，则抛出一个异常。
在 "try" 代码块中调用 checkNum() 函数。
checkNum() 函数中的异常被抛出
"catch" 代码块接收到该异常，并创建一个包含异常信息的对象 ($e)。
通过从这个 exception 对象调用 $e->getMessage()，输出来自该异常的错误消息
不过，为了遵循“每个 throw 必须对应一个 catch”的原则，可以设置一个顶层的异常处理器来处理漏掉的错误。
*/