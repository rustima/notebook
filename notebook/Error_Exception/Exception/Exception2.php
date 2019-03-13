<?php
//�쳣��Exception��������ָ���Ĵ�����ʱ�ı�ű����������̡�
/*ʲô���쳣��
PHP 5 �ṩ��һ���µ��������Ĵ���������
�쳣����������ָ���Ĵ����쳣���������ʱ�ı�ű����������̡����������Ϊ�쳣��
���쳣������ʱ��ͨ���ᷢ����
1.��ǰ����״̬������
2.����ִ�б��л���Ԥ������쳣����������
3.���������������Ҳ���ӱ���Ĵ���״̬���¿�ʼִ�д��룬��ֹ�ű�ִ�У���Ӵ����������λ�ü���ִ�нű�
���ǽ�չʾ��ͬ�Ĵ���������
1.�쳣�Ļ���ʹ��
2.�����Զ�����쳣������
3.����쳣
4.�����׳��쳣
5.���ö����쳣������
*/

/*�쳣�Ļ���ʹ��
 * ���쳣���׳�ʱ�����Ĵ��벻�����ִ�У�PHP �᳢�Բ���ƥ��� "catch" ����顣
����쳣û�б����񣬶�����û��ʹ�� set_exception_handler() ����Ӧ�Ĵ���Ļ���
��ô������һ�����صĴ����������󣩣�������� "Uncaught Exception" ��δ�����쳣���Ĵ�����Ϣ�� 
�����ǳ����׳�һ���쳣��ͬʱ��ȥ��������
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
/*����Ĵ����������������һ������
( ! ) Fatal error: Uncaught Exception: value>1 in C:\xampp\htdocs\notebook\Error_Exception\Exception\Exception2.php on line 27
( ! ) Exception: value>1 in C:\xampp\htdocs\notebook\Error_Exception\Exception\Exception2.php on line 27
*/

/*Try, throw �� catch
 * Ҫ�����������ӳ��ֵĴ���������Ҫ�����ʵ��Ĵ����������쳣��
��ȷ�Ĵ������Ӧ��������
Try - ʹ���쳣�ĺ���Ӧ��λ�� "try" ������ڡ����û�д����쳣������뽫�ճ�����ִ�С���������쳣�����������׳�һ���쳣��
Throw - ����涨��δ����쳣��ÿһ�� "throw" �����Ӧ����һ�� "catch"
Catch - "catch" �����Ჶ���쳣��������һ�������쳣��Ϣ�Ķ���
�����Ǵ���һ���쳣��
 */

//�������׳�һ���쳣�ĺ���
function checknum($num){
    if($num>1){
        throw new Exception("value>1");    //�趨�쳣�׳��ķ�ʽ���׳���Ϣ
    }
    return true;
}


//��"try"�����д����쳣
try{
    checknum(2);
    //����쳣���׳����������Ϣ���ᱻ���
    echo 'if you see me,the num is 1 or below';
}

//�����쳣
catch(Exception $e){
    echo 'Message:'.$e->getMessage();    //����׳��쳣��Ϣ
}
//�����Message:value>1

/*����Ĵ����׳���һ���쳣��������������
���� checkNum() ����������������Ƿ���� 1������ǣ����׳�һ���쳣��
�� "try" ������е��� checkNum() ������
checkNum() �����е��쳣���׳�
"catch" �������յ����쳣��������һ�������쳣��Ϣ�Ķ��� ($e)��
ͨ������� exception ������� $e->getMessage()��������Ը��쳣�Ĵ�����Ϣ
������Ϊ����ѭ��ÿ�� throw �����Ӧһ�� catch����ԭ�򣬿�������һ��������쳣������������©���Ĵ���
*/