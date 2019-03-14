<?php
namespace n1;
class n{function __construct(){echo'n1';}}

namespace n2;
class n{function __construct(){echo'n2';}}

// namespace n3;
// use n1\n;
$foo = new n();
// new \n1\n();
$return = $foo->__construct();
var_dump($return);