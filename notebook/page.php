<?php
/*��ҳ
 * 
 * 
 */
include ('conn.php');
//��ȡҪ��ҳ����������ݿ��ȡÿҳС����������õ���ҳ�������з�ҳ
class Page{
    function getitem($item){
        $item = $this->item;
        return $item;
    }
    //ÿҳ��ʾ������
    function getpageitem(){
        //������10
        $page = 10;
        return $page;
    }
    //��ҳ��
    function getpagecount(){
        //������20
        $pagecount = 20;
        return $pagecount;
    }
}