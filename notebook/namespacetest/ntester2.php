<?php
namespace n2;
require 'n1.php';

class foo{function __construct(){echo "foo";}}
// new foo;
// new \n2\foo;
class nobody{function __construct(){echo "t2";}}
use namespacetest as n2;
new nobody();
// new \namespacetest\nobody();
new foo;