<?php
/*
Exception{
    
    //����
    protected tring $message;�쳣��Ϣ����
    protected int $code;�쳣����
    protected string $file;�׳��쳣���ļ���
    protected int $line;�׳��쳣�ڸ��ļ��е��к�
    
    //����
    public __construct(string $message = "",int $code = 0,Throwable $previous = NULL)���캯��
    final public getMesasge(void):string��ȡ�쳣��Ϣ����
    final public getPrevious(void):Throwable�����쳣���е�ǰһ���쳣
    final public getCode(void):int��ȡ�쳣����
    final public getFile(void):string�����쳣ʱ�ĳ����ļ�����
    final public getLine(void):int��ȡ�������쳣�����ļ��е��к�
    final public getTrace(void):array��ȡ�쳣׷����Ϣ
    final public getTraceAsString(void):string��ȡ�ַ������͵��쳣׷����Ϣ
    public __toString(void):string���쳣����ת��Ϊ�ַ���
    final private __clone(void):void�쳣��¡
    

}