<?php
class Exception
{
    protected $message = 'Unknown exception';   // �쳣��Ϣ
    private   $string;                          // __toString cache
    protected $code = 0;                        // �û��Զ����쳣����
    protected $file;                            // �����쳣���ļ���
    protected $line;                            // �����쳣�Ĵ����к�
    private   $trace;                           // backtrace
    private   $previous;                        // previous exception if nested exception
    
    public function __construct($message = null, $code = 0, Exception $previous = null){}
    
    final private function __clone(){}           // Inhibits cloning of exceptions.
    
    final public  function getMessage(){}        // �����쳣��Ϣ
    final public  function getCode(){}           // �����쳣����
    final public  function getFile(){}           // ���ط����쳣���ļ���
    final public  function getLine(){}           // ���ط����쳣�Ĵ����к�
    final public  function getTrace(){}          // backtrace() ����
    final public  function getPrevious(){}       // ֮ǰ�� exception
    final public  function getTraceAsString(){}  // �Ѹ�ɻ����ַ����� getTrace() ��Ϣ
    
    // Overrideable
    public function __toString(){}               // ��������ַ���
}