<?php
/*bindto
�û�PHP���������ָ����IP��ַ��IPv4��IPv6���е�һ������/�� �˿ںţ�
����﷨�� ip:port.
��IP��˿�����Ϊ0������ϵͳ�Զ�ѡ��
*/
$opts = array('socket'=>array('bindto'=>'0:0',),);  //����ʹ�ù�������Ĺ�������

//create context
$context = stream_context_create($opts);

//fetch data
echo file_get_contents('http://www.example.com',false,$context);