<?php
/*��Χ����������::
 * ���ڷ��ʾ�̬��Ա���ೣ�������������ڸ������е����Ժͷ�����
 * ���ඨ��֮��������Щ��ĿʱҪʹ������
 * ��5.3.0������ñ����������࣬�ñ�����ֵ�����ǹؼ��֣���self,parent��static
 * 
 */

//�����ⲿʹ��::������
class MyClass{
    const CONST_VALUE = 'A constant value';
    public static $my = "my";
    public function test(){echo "test";}
}

$classname = 'Myclass';  //ͨ������������

// echo $classname::CONST_VALUE;

// echo MyCLASS::CONST_VALUE;

// $classname->test(); //����

echo $classname::$my; //���þ�̬��ԱʱҪ����$