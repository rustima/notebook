<?php
//��ʾ��ֵ��ΪTRUE/FALSE
$foo = True; //$fooΪBool����

//ͨ������������صĲ���ֵ����ᱻ���ݸ���������

// ==�Ǽ�����ߵı����Ƿ���ȵ��������������ز���ֵ
$action = PHP_VERSION;;
if($action == "7.2.10"){
    echo $action;
}

//�������ǲ���Ҫ��
if($foo == TRUE){
    echo "true";
}

//��Ϊ����ʹ�����ַ�ʽ
if($foo){
    echo "true";
}

echo "<br />--------------------------------------------------<br />\n";

/*ת��Ϊ����ֵ
 * converting to bool
 * Ҫ��ȷ�ؽ�һ��ֵת����boolean,��(bool)����(boolean)��ǿ��ת�������Ǻܶ������
 * ����Ҫǿ��ת������Ϊ����������������߿������̽ṹ��Ҫһ��boolean����ʱ����ֵ
 * �ᱻ�Զ�ת��,�μ�����ת�����б�(http://php.net/manual/zh/language.types.type-juggling.php)
 */

/*
 * ��ת��Ϊbooleanʱ������ֵ����Ϊ��false:
 * ����ֵFALSE����
 * ����ֵ0���㣩
 * ������ֵ0.0���㣩
 * ���ַ������Լ��ַ���"0"
 * �������κ�Ԫ�ص����飨�����飩
 * ��������NULL��������δ��ֵ�ı�����
 * �ӿձ�����ɵ�SimpleXML����
 * 
 * ���е�����ֵ����Ϊ��TRUE�������κ���Դ��NAN��
 * ps:-1����������ֵ������������һ������ΪTRUE
 */
var_dump((bool)"");
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)