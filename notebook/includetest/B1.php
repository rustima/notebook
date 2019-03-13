<?php
//调用B的方法
include 'B.php';
$t = new B();
$t->b1();
echo $t::$b3;