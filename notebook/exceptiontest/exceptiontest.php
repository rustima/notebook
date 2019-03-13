<?php
/*
Exception{
    
    //属性
    protected tring $message;异常消息内容
    protected int $code;异常代码
    protected string $file;抛出异常的文件名
    protected int $line;抛出异常在该文件中的行号
    
    //方法
    public __construct(string $message = "",int $code = 0,Throwable $previous = NULL)构造函数
    final public getMesasge(void):string获取异常消息内容
    final public getPrevious(void):Throwable返回异常链中的前一个异常
    final public getCode(void):int获取异常代码
    final public getFile(void):string创建异常时的程序文件名称
    final public getLine(void):int获取创建的异常所在文件中的行号
    final public getTrace(void):array获取异常追踪信息
    final public getTraceAsString(void):string获取字符串类型的异常追踪信息
    public __toString(void):string将异常对象转换为字符串
    final private __clone(void):void异常克隆
    

}