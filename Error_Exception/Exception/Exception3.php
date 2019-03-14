<?php
//创建一个自定义的Exception类
/*创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。
这个自定义的 exception 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。
*/

class customException extends Exception{    //继承系统自带的异常类
    public function errorMessage(){    //创建自定义的异常处理信息的方法
        //创建自定义的异常信息
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().':<b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try{
    //check if
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE)
    {
        //throw exception if eamil is not valid
        throw new customException($email);
    }
}catch (customException $e)    //使用自定义的异常处理类创建对象
{
    //display custom message
    echo $e->errorMessage();
}
/*这个新的类是旧的 exception 类的副本，外加 errorMessage() 函数。正因为它是旧类的副本，因此它从旧类继承了属性和方法，我们可以使用 exception 类的方法，比如 getLine() 、 getFile() 以及 getMessage()。
例子解释：
上面的代码抛出了一个异常，并通过一个自定义的 exception 类来捕获它：
customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧类的所有属性和方法。
创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一条错误消息
把 $email 变量设置为不合法的 e-mail 地址字符串
执行 "try" 代码块，由于 e-mail 地址不合法，因此抛出一个异常
"catch" 代码块捕获异常，并显示错误消息
*/