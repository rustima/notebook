<?php
// $num = 0;
// try{
//     $f = fopen('1',r);
//     if(!$f){
//         throw new Exception("shibai");
//     }
// }catch (Exception $e){
//     echo $e->getMessage();
// }

//create functionwith an exception
function chek($num){
    try{
        if($num>1){
            throw new Exception("value >1 ");
            
        }
        return true;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

$a = chek(2);

var_dump($a);
