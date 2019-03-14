<?php
// namespace namespacetest;
require './n1.php';
// require './n22/n2.php';

use namespacetest\nobody;
// use namespacetest\n22\nobody as n2nobody;
// use namespacetest\nobody as nobody;

$t1 = new nobody();
// $t1 = new \namespacetest\nobody();
// $t1 = new \namespacetest\nobody();


// $t2 = new \namespacetest\n22\nobody();
