<?php
date_default_timezone_set('Asia/Shanghai');
define("PATH",dirname(__FILE__));
require_once(PATH . '/code/template.php');
$smarty = new Template();
$smarty->_template = PATH . '/template';//模板文件路径
$smarty->_res_base = 'http://127.0.0.1/template';//css js image 等静态文件路径

//赋值
$smarty->assign("title", "api");
$smarty->assign("name", "api");
$smarty->assign("tip","(一)");
$smarty->assign("array",array(
    1=>"A",2=>"B"));
$smarty->assign("time",time());
//渲染模板
$smarty->display('index.html');
/*
打开页面，你会看到有以下信息
header
测试(一)|api
A|1
B|2

1
2016-12-21
 */
?>
