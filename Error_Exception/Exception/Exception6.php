<?php
/*设置顶层异常处理器 （Top Level Exception Handler）
set_exception_handler() 函数可设置处理所有未捕获异常的用户定义函数。
*/

function myException($exception){
    echo "<b>Exception:</b>",$exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');

/*以上代码的输出应该类似这样：
Exception: Uncaught Exception occurred
在上面的代码中，不存在 "catch" 代码块，而是触发顶层的异常处理程序。
应该使用此函数来捕获所有未被捕获的异常。
*/