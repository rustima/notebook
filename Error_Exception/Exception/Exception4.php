<?php
/*"catch" ����鲶���쳣������ʾ������Ϣ
����쳣
����Ϊһ�νű�ʹ�ö���쳣���������������
����ʹ�ö�� if..else ����飬��һ�� switch ����飬����Ƕ�׶���쳣����Щ�쳣�ܹ�ʹ�ò�ͬ�� exception �࣬�����ز�ͬ�Ĵ�����Ϣ��
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

/*����Ĵ����������������������κ����������������׳�һ���쳣��
customException() ������Ϊ�ɵ� exception ���һ����չ�������ġ��������ͼ̳��˾�����������Ժͷ�����
���� errorMessage() ��������� e-mail ��ַ���Ϸ�����ú�������һ��������Ϣ��
ִ�� "try" ����飬�ڵ�һ�������£������׳��쳣��
���� e-mail �����ַ��� "example"���ڶ��������ᴥ���쳣��
"catch" �����Ჶ���쳣������ʾǡ���Ĵ�����Ϣ
���û�в��� customException������������ base exception���������ﴦ���쳣��
*/