<?php
/*�����׳��쳣
��ʱ�����쳣���׳�ʱ����Ҳ��ϣ���Բ�ͬ�ڱ�׼�ķ�ʽ�������д���������һ�� "catch" ��������ٴ��׳��쳣��
�ű�Ӧ�ö��û�����ϵͳ���󡣶Գ���Ա��˵��ϵͳ����Ҳ�����Ҫ�������û������ǲ�������Ȥ��Ϊ�����û�������ʹ�ã��������ٴ��׳����ж��û��Ƚ��Ѻõ���Ϣ���쳣��
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

/*����Ĵ��������ʼ���ַ���Ƿ����ַ��� "example"������У����ٴ��׳��쳣��
customException() ������Ϊ�ɵ� exception ���һ����չ�������ġ��������ͼ̳��˾�����������Ժͷ�����
���� errorMessage() ��������� e-mail ��ַ���Ϸ�����ú�������һ��������Ϣ��
�� $email ��������Ϊһ����Ч���ʼ���ַ���������ַ��� "example"��
"try" ����������һ�� "try" ����飬�����Ϳ����ٴ��׳��쳣��
���� e-mail �����ַ��� "example"����˴����쳣��
"catch" ���񵽸��쳣���������׳� "customException"��
���� "customException"������ʾһ��������Ϣ��
�������Ŀǰ�� "try" ��������쳣û�б������������ڸ��߲㼶�ϲ��� catch ����顣
*/
