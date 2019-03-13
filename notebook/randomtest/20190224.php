<?php
namespace p1;
class l1{function __construct(){echo "p1";}}
namespace p2;
class l1{function __construct(){echo "p2";}}
$n1 = new \p1\l1; //Êä³öp1
$n2 = new l1;  //Êä³öp2