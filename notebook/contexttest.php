<?php
/*bindto
用户PHP访问网络的指定的IP地址（IPv4或IPv6其中的一个）和/或 端口号，
这个语法是 ip:port.
把IP或端口设置为0可以让系统自动选择
*/
$opts = array('socket'=>array('bindto'=>'0:0',),);  //必须使用关联数组的关联数组

//create context
$context = stream_context_create($opts);

//fetch data
echo file_get_contents('http://www.example.com',false,$context);