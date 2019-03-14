php 最常用的内置函数大全	from http://www.php.cn/php-weizijiaocheng-370987.html
$_SERVER['SCRIPT_NAME'] 返回/mantis/test.php，相对路径；

__FILE__ 返回文件的绝对路径D:\Projects\mantis\test.php
$_SERVER['HTTP_X_FORWARDED_PROTO']
$_SERVER['HTTPS']
$_SERVER['SERVER_PORT']
$_SERVER["REQUEST_URI"] URI 用来指定要访问的页面
$GLOBALS一个包含了全部变量的全局组合数组。变量的名字就是数组的键。 
explode 使用一个字符串分割另一个字符串 返回一个字符串数组
implode 使用一个字符将数组元素链接成字符串
$_SERVER['SERVER_NAME'] 当前脚本所在服务器的主机名
$_SERVER['HTTP_HOST'] 域名
$_SERVER['SERVER_ADDR'] 当前脚本所在服务器的IP地址
trim去除字符串首尾处的空白字符
basename 返回文件名部分
dirname 返回目录部分
krsort — 对数组按照键名逆向排序
set_time_limit()设置脚本最大执行时间
time() 返回当前的unix时间戳
is_string()判断变量是不是字符串
is_bool
is_Inteter
is_float
strtotime -- 将任何英文文本的日期时间描述解析为 UNIX 时间戳
file_exists 检查文件或目录存不存在
fopen()打开指定的文件或URL
feof()判断文件指针是否在末尾
fgets()从文件指针中读取一行
trim()去掉一行前后的空格
strlen()返回字符串的长度
str_replace
isset
str_replace( "\0", '', $t_self ) 将t_self中的\0替换成“”
strpos — 查找在字符串中首次出现的位置
$_SERVER['SERVER_SOFTWARE'] 服务器信息
realpath 返回规范化的绝对路径名
DIRECTORY_SEPARATOR 操作系统目录分隔符
PATH_SEPARATOR 在linux系统中是一个" : "号,Windows上是一个";"号
set_include_path 设置incldue_path
get_include_path 获取当前include_path
count() 返回数组长度，非数组返回1
substr(string string ,int start [int length]) 返回从start指定位置开始的长度的字符串
$_SERVER['LOCAL_ADDR'] IIS7上用来获取服务器IP地址
$_SERVER['REMOTE_ADDR'] 浏览器用户的IP地址
array_pad — 用值将数组填补到指定长度
memory_get_usage()返回分配给PHP的内存量
spl_autoload_register 注册__autoload()函数
ob_get_contents() Return the contents of the output buffer
strtolower() 将大写字母转换为小写字母
extension_loaded('zlib')找出扩展是否被加载
ini_get 返回php.ini中配置项的值
ini_set 设置php.ini中配置项的值 ,ini_set("memory_limit",'256M'); 只在脚本执行期间生效，脚本执行完成该值重置
PHP_EOL PHP行结束符
preg_replace 执行一个正则表达式的替换
preg_match(string pattern, string subject [, array matches [, int flags]]) -- 进行正则表达式匹配
htmlspecialchars Convert special characters to HTML entities
ceil() 进一法取整
floor() 舍去法取整
round()四舍五入法