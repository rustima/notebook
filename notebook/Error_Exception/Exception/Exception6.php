<?php
/*���ö����쳣������ ��Top Level Exception Handler��
set_exception_handler() ���������ô�������δ�����쳣���û����庯����
*/

function myException($exception){
    echo "<b>Exception:</b>",$exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');

/*���ϴ�������Ӧ������������
Exception: Uncaught Exception occurred
������Ĵ����У������� "catch" ����飬���Ǵ���������쳣�������
Ӧ��ʹ�ô˺�������������δ��������쳣��
*/