<?php
/*�ڲ�ͬĿ¼�е�ͬ���ļ��Ľ�����������������ռ�Ĵ�������
*��Ҫ�����д����Ӧ�ó���ʱ���������õĴ����������ʱ��������������:
*1.�û���д�Ĵ�����PHP�ڲ�����/����/�������������/����/����֮������ֳ�ͻ
*2.Ϊ�ܳ��ı�ʶ�����ƣ�ͨ����Ϊ�˻����һ�����������ģ�����һ�����������ƣ���ߴ���ɶ���
*/
namespace notebook\namespacetest;    //���㲻�ǵ�ǰĿ¼Ҳ���Գɹ�
class MyClass{function __construct(){echo"myclass";}}
function myfunction(){}
const MYCONST = 1;
namespace a2;
// $a = new MyClass;        //����
$b = new \notebook\namespacetest\MyClass();
