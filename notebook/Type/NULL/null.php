<?php
/*�����NULLֵ��ʾһ������û��ֵ��NULL����Ψһ���ܵ�ֵ����NULL��
 * �����������һ����������Ϊ��NULL��
 * 1.����ֵΪNULL
 * 2.δ����ֵ
 * 3.��unset()
 * 
 * NULL����ֻ��һ��ֵ�����ǲ����ִ�Сд�ĳ���NULL
 * 
 */
$var = NULL;
// $var = null;

//�ж��Ƿ�NULL:is_null(mixed $var):bool ���var��null�򷵻�TRUE�����򷵻�FALSE
var_dump(is_null($var));    //true
echo is_null($var)."<br />";    //1

//ת����NULL��ʹ��(unset)$var��һ������ת��ΪNULL������ɾ���ñ�����unset��ֵ�����Ƿ���NULLֵ
unset($var);
var_dump($var);    //null