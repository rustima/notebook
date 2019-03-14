<?php
// global $a,$b;
function change1()
{
    global $a,$b;
    $a = 1;
    $b = 1;
}

function change2()
{
    $GLOBALS['a'] = 2;
    $a = 2;
    $b = 2;
}
$a = $b = 0;

// change1();
change2();

echo "$a+$b";