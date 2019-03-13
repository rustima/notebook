<?php
/*"catch" 代码块捕获异常，并显示错误消息
多个异常
可以为一段脚本使用多个异常，来检测多种情况。
可以使用多个 if..else 代码块，或一个 switch 代码块，或者嵌套多个异常。这些异常能够使用不同的 exception 类，并返回不同的错误消息：
*/

class customException extends Exception{
    public function errorMessage(){
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().':<b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try{
    //check if
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE){
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for 'example' in mail address
    if(strpos($email,"example") !== FALSE){
        throw new Exception("$email is an example email");
    }
}catch (customException $e){
    echo $e->errorMessage();
}catch (Exception $e){
    echo $e->getMessage();
}

/*上面的代码测试了两种条件，如何任何条件不成立，则抛出一个异常：
customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧类的所有属性和方法。
创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。
执行 "try" 代码块，在第一个条件下，不会抛出异常。
由于 e-mail 含有字符串 "example"，第二个条件会触发异常。
"catch" 代码块会捕获异常，并显示恰当的错误消息
如果没有捕获 customException，紧紧捕获了 base exception，则在那里处理异常。
*/