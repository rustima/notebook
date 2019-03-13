<?php
//资源resource是一种特殊变量，保存了到外部资源的一个引用。 资源是通过专门的函数来建立和使用的。
//由于资源类型变量保存有为打开文件、数据库连接、图形画布区域等的特殊句柄，因此将其他类型的值转换为资源没有意义
//释放资源：引用计数系统是Zend引擎的一部分，可以自动检测到一个资源不再被引用了（与JAVA一样）。这种情况下此资源使用的所有外部资源都会被垃圾回收系统释放。因此很少需要手工释放内存（永久数据库连接除外）
//get_resource_type(resource $handle):string 返回值用于表示传递给它的resource的类型。如果参数不是合法的resource,将产生错误。
$fp = fopen("foo","w");
echo get_resource_type($fp)."<br />\n";    //print stream

$fp = tmpfile();    //tmpfile — 建立一个临时文件"tmpfile ( void ) : resource",返回一个与 fopen() 所打开返回类似的新文件句柄， 或者在失败时返回 FALSE
var_dump(get_resources());

