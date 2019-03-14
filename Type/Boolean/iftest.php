<?php
if(2){
    echo "numbertest success\n";
}

if("n"){
    echo "strtest success\n";
}

class sam{function foo(){}}
$a = new sam;
if($a){
    echo "objtest success\n";
}
