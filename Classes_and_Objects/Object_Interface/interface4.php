<?php
interface a{
    public const b = 'Interface constant';
}

//����ӿڳ���
echo a::b;

//����д�����������ܱ����ǡ��ӿڳ����ĸ�����ೣ����һ����
class b implements a{
    const b = 'Class constant';
}