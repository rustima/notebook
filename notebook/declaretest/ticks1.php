<?php
declare(ticks = 1);

// $pint = 1;

//a function called on each tick event
function tick_handler1(){
    echo "tick_handler1() called</br>";
}

// $pint = 1;   //

register_tick_function('tick_handler1');

$a = 1;

echo "$a<br />";    //说明在echo执行后才会调用tick event

if($a>0){
    $a+=2;
    print($a."<br />");
}
