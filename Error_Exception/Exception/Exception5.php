<?php
/*重新抛出异常
有时，当异常被抛出时，您也许希望以不同于标准的方式对它进行处理。可以在一个 "catch" 代码块中再次抛出异常。
脚本应该对用户隐藏系统错误。对程序员来说，系统错误也许很重要，但是用户对它们并不感兴趣。为了让用户更容易使用，您可以再次抛出带有对用户比较友好的消息的异常：
*/
class customException extends Exception{
    public function errorMessage(){
        //error mesage
        $errorMsg = $this->getMessage().' is not a valid E-mail address.';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try{
    try{
        //check for "example" in email address
        if(strpos($email,"example") !== FALSE){
            //Throw exception if email is not valid
            throw new Exception ($email);
        }
    }catch(Exception $e){
        //re-throw exception
        throw new customException($email);
    }
}catch(customException $e){
    //display custom message
    echo $e->errorMessage();
}

/*上面的代码检测在邮件地址中是否含有字符串 "example"。如果有，则再次抛出异常：
customException() 类是作为旧的 exception 类的一个扩展来创建的。这样它就继承了旧类的所有属性和方法。
创建 errorMessage() 函数。如果 e-mail 地址不合法，则该函数返回一个错误消息。
把 $email 变量设置为一个有效的邮件地址，但含有字符串 "example"。
"try" 代码块包含另一个 "try" 代码块，这样就可以再次抛出异常。
由于 e-mail 包含字符串 "example"，因此触发异常。
"catch" 捕获到该异常，并重新抛出 "customException"。
捕获到 "customException"，并显示一条错误消息。
如果在其目前的 "try" 代码块中异常没有被捕获，则它将在更高层级上查找 catch 代码块。
*/
