<?php
namespace npt\npt1;
class foo{
    function __construct(){
        echo 'n1';
    }
}

namespace npt\npt2;
class foo{
    function __construct(){
        echo 'n2';
    }
}

new foo(); //n2
new \npt\npt2\foo();    //ע�⣺��ʱĿ¼��npt\npt2\������Ҫдȫֻ��ʹ�þ���·��

new \npt\npt1\foo();  //n1

// use npt\npt1\foo;

// new foo();  //false

use npt\npt1;

new npt1\foo();    //use�����ռ�֮��ֱ���������ռ����һ��\ʵ��������ζ��use֮��Ĵ��붼����npt\npt1Ϊ��ʼ·����Ч����ͬ��as npt1)����ʱ��npt1ǰ���ܼ�\
new \npt\npt2\foo();  //���������ռ��Ѿ�ת��Ϊnpt1,���Ե���npt2Ҫ����Ŀ¼��ʼ
// use npt\npt1 as n1;
// new n1\foo();