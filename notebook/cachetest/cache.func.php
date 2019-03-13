<?php
//Ë¢ÐÂ»º´æ
function recache($cachestr = ''){
    if(!$cachestr){
        $cachelist = array('config','class','archive','newcomment','newpost','link','tag','statistic','topblog');
    }else{
        $cachelist = explode(',',$cachestr);
        foreach ($cachelist as $cache){
            $cachename = $cache.'_recache';
            if(function_exists($cachename)){
                
            }
        }
    }
}