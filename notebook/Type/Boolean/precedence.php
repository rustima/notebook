<?php
//����������ȼ���bool�жϵ�Ӱ��
$x = TRUE;
$y = FALSE;
$z = $y OR $x;    //$zΪFALSE����ΪOR�����ȼ���=�ͣ����Ըñ��ʽΪ($z = $y) OR $x
var_dump($z);
$z = $y || $x;    //$zΪTRUE����Ϊ||�����ȼ���=�ߣ��ñ��ʽΪ$z = ($y OR $x)
var_dump($z);

/*Beware of certain control behavior with boolean and non boolean values :

// Consider that the 0 could by any parameters including itself
var_dump(0 == 1); // false
var_dump(0 == (bool)'all'); // false
var_dump(0 == 'all'); // TRUE, take care
var_dump(0 === 'all'); // false

// To avoid this behavior, you need to cast your parameter as string like that :
var_dump((string)0 == 'all'); // false
*/