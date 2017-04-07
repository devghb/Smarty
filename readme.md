这是一个完全简化的Smarty，支持原smarty的语法。<br>
重构后的template.php只有20KB，你可以很方便的集成到yaf/yii/laravel等框架中。<br>
PHP版本5.3以上。

Smarty文档

一、资源引用

res标签
功能：返回当前模块静态资源url路径
实例：{res file=css.css}

include标签
功能：在当前模板中包含其它模板
实例：{include file=”header.html”}

二、模板变量
assign标签
例在index.html中赋值变量
模板代码:
{assign var=”name” value=”Tom”}
Hello,{$name}！

$smarty标签
实例：$smarty.get $smarty.post $smarty.cookie $smarty.env $smarty.server $smarty.request $smarty.session等

三、变量调节器
default
功能：为变量设置一个默认值，当变量为空或者未分配的时候，将由默认值替代输出
实例：{$var|default:”no title”}

truncate
功能：字符串截取。从字符串开始处截取某长度的字符。默认会在末尾追加省略号。
实例：{$content|truncate:20}

date
功能：格式化本地时间和日期。
实例：{$var|date:format}

foreach
说明：
foreach 用于处理简单数组(数组中的元素的类型一致)。
foreach 必须和 /foreach 成对使用，且必须指定 from 和 item 属性。
foreach 可以嵌套，但必须保证嵌套中的 foreach 名称唯一。
foreachelse 语句在 from 变量没有值的时候被执行。

from 属性：指定被循环的数组，数组长度决定了循环的次数。
item属性：单个循环项目的变量名，在循环内部使用。
name 属性为可选属性，可以任意指定(字母、数字和下划线的组合)。
key：单个循环的Key值。（这行是ZC加的说明）

name 属性如果指定，foreach循环体内会自动生成如下变量
$smarty.foreach.foreach_name.index表示本次循环索引，从0开始递增的整数
$smarty.foreach.foreach_name.iteration表示本次的循环次数，从1开始递增的整数
$smarty.foreach.foreach_name.first表示是否是第一次循环
$smarty.foreach.foreach_name.last表示是否是最后一次循环
$smarty.foreach.foreach_name.show表示是否有数据
$smarty.foreach.foreach_name.total表示循环总次数，也可在循环体外使用

实例1
模板代码:
{* 该例将输出数组 $custid 中的所有元素的值 *}
{foreach from=$custid item=curr_id}
id: {$curr_id}
{/foreach}
输出结果为:
id: 1000
id: 1001
id: 1002
只整理了些常用的，其实还有很多功能可以查看template.php
