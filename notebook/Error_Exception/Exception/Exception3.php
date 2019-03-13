<?php
//����һ���Զ����Exception��
/*�����Զ�����쳣�������ǳ��򵥡����Ǽ򵥵ش�����һ��ר�ŵ��࣬�� PHP �з����쳣ʱ���ɵ����亯������������� exception ���һ����չ��
����Զ���� exception ��̳��� PHP �� exception ����������ԣ�������������Զ���ĺ�����
*/

class customException extends Exception{    //�̳�ϵͳ�Դ����쳣��
    public function errorMessage(){    //�����Զ�����쳣������Ϣ�ķ���
        //�����Զ�����쳣��Ϣ
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
}catch (customException $e)    //ʹ���Զ�����쳣�����ഴ������
{
    //display custom message
    echo $e->errorMessage();
}
/*����µ����Ǿɵ� exception ��ĸ�������� errorMessage() ����������Ϊ���Ǿ���ĸ�����������Ӿ���̳������Ժͷ��������ǿ���ʹ�� exception ��ķ��������� getLine() �� getFile() �Լ� getMessage()��
���ӽ��ͣ�
����Ĵ����׳���һ���쳣����ͨ��һ���Զ���� exception ������������
customException() ������Ϊ�ɵ� exception ���һ����չ�������ġ��������ͼ̳��˾�����������Ժͷ�����
���� errorMessage() ��������� e-mail ��ַ���Ϸ�����ú�������һ��������Ϣ
�� $email ��������Ϊ���Ϸ��� e-mail ��ַ�ַ���
ִ�� "try" ����飬���� e-mail ��ַ���Ϸ�������׳�һ���쳣
"catch" ����鲶���쳣������ʾ������Ϣ
*/