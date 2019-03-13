<?php
/*
 * PHP has large number of predefined constants. This HOWTO will present the seven most important, most practical and most useful PHP Magic Constants.
__FILE__ �C The full path and filename of the file.
__DIR__ �C The directory of the file.
__FUNCTION__ �C The function name.
__CLASS__ �C The class name.
__METHOD__ �C The class method name.
__LINE__ �C The current line number of the file.
__NAMESPACE__ �C The name of the current namespace
 * 
 */

//set namespace
namespace TestMagic;

//__FILE__ prints file full path with name
echo 'This file full path and file name is ' . __FILE__ . "\n</br>";  //This file full path and file name is C:\xampp\htdocs\notebook\magic_constants\test.php 

//__DIR__ prints file full path without file name
echo 'This file full path is ' . __DIR__ . "\n</br>";  //This file full path is C:\xampp\htdocs\notebook\magic_constants 

//__LINE__ prints current line number on file
echo 'This is line number ' . __LINE__ . "\n</br>"; //This is line number 24 

//__FUNCTION__ prints function's namespace path
function magic(){
    echo 'This is from '.__FUNCTION__."\n</br>";
}
magic(); //This is from TestProject\magic

echo "<br />---------------------slice----------------------<br />";

//__CLASS__
class Magic{
    //prints class name
    public function printClassName(){
        echo 'This is ' . __CLASS__ . "\n</br>";  //This is TestMagic\Magic 
    }
    
    //prints class and method name
    public function printMethodName(){
        echo 'This is ' . __METHOD__ . "\n</br>";  //This is TestMagic\Magic::printMethodName 
    }
    
    //prints function name
    public function printFunctionName(){
        echo 'This is function ' . __FUNCTION__ . "\n</br>";  //This is function printFunctionName 
    }
    
    //prints namespace name
    public function printNamespace(){
        echo 'Namespace name is ' . __NAMESPACE__ . "\n</br>";  //Namespace name is TestMagic 
    }
}

$test = new Magic();
$test->printClassName();
$test->printMethodName();
$test->printFunctionName();
$test->printNamespace();

