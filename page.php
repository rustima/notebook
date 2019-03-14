<?php
/*分页
 * 
 * 
 */
include ('conn.php');
//获取要分页的项，连接数据库获取每页小项总数计算得到总页数，进行分页
class Page{
    function getitem($item){
        $item = $this->item;
        return $item;
    }
    //每页显示的项数
    function getpageitem(){
        //假设是10
        $page = 10;
        return $page;
    }
    //总页数
    function getpagecount(){
        //假设是20
        $pagecount = 20;
        return $pagecount;
    }
}