<?php
//echo str_replace('\\','/',__FILE__)?str_replace('\\','/',__FILE__):$_SERVER['SCRIPT_FILENAME'];

//echo $_SERVER['SCRIPT_FILENAME'];
//echo $_SERVER['PHP_SELF'];//相对于网站根目录的路径及 PHP 程序名称。

//echo $_SERVER['REQUEST_URI'];
//echo   $_SERVER['HTTP_REFERER'];//使用 $_SERVER['HTTP_REFERER'] 将很容易得到链接到当前页面的前一页面的地址
$_SERVER['DOCUMENT_ROOT'];
//PHP $_SERVER['HTTP_REFERER'] 无效
//需要注意的是，$_SERVER['HTTP_REFERER'] 完全来源于浏览器。并不是所有的用户代理（浏览器）都会设置这个变量，而且有的还可以手工修改 HTTP_REFERER。因此，$_SERVER['HTTP_REFERER'] 不总是真实正确的。
//通常下面的一些方式，$_SERVER['HTTP_REFERER'] 会无效：
//直接输入网址访问该网页。
//Javascript 打开的网址。
//Javascript 重定向（window.location）网址。
//使用 meta refresh 重定向的网址。
//使用 PHP header 重定向的网址。
//flash 中的链接。
//浏览器未加设置或被用户修改。
//所以一般来说，只有通过 <a></a> 超链接以及 POST 或 GET 表单访问的页面，$_SERVER['HTTP_REFERER'] 才有效。
//由于 $_SERVER['HTTP_REFERER'] 对 POST 表单访问也是有效的，因此在表单数据处理页面一定程度上可以通过校验 $_SERVER['HTTP_REFERER'] 来防止表单数据的恶意提交。但该方法并不能保证表单数据的绝对正确，即对表单数据的真实性检测并不能完全依赖于 $_SERVER['HTTP_REFERER'] 。