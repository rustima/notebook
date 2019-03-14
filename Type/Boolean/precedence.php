<?php
//运算符的优先级对bool判断的影响
$x = TRUE;
$y = FALSE;
$z = $y OR $x;    //$z为FALSE，因为OR的优先级比=低，所以该表达式为($z = $y) OR $x
var_dump($z);
$z = $y || $x;    //$z为TRUE，因为||的优先级比=高，该表达式为$z = ($y OR $x)
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