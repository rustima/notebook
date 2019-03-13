<?php
function test_global()
{
    global $var1,$var2;
    $var2 = &$var1;
}

function test_globals()
{
    global $var3,$var1;
    $var3 = &$var1;
    $GLOBALS['var3'] = &$GLOBALS['var1'];
}

$var1 = 5;
$var2 = $var3 = 0;
test_global();
print $var2."<br />";
test_globals();
print $var3."<br />";