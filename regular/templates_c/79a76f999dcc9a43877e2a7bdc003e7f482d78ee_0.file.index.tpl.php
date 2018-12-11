<?php
/* Smarty version 3.1.33, created on 2018-12-11 14:34:14
  from '/data/htdocs/www.lihang.com/regular/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0f5a66e99e14_33528649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a76f999dcc9a43877e2a7bdc003e7f482d78ee' => 
    array (
      0 => '/data/htdocs/www.lihang.com/regular/templates/index.tpl',
      1 => 1544510051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f5a66e99e14_33528649 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <h1>概述</h1>
    <h2>1、有哪些特殊字符需要转义</h2>
    <p>需要转义的字符有：\ . * ^ & {} [] ? 等</p>

    <h2>2、什么是限定符与定位符</h2>
    <p> 限定符：是指允许特定字符或字符集出现的次数的字符 如：* + ? 等</p>
    <p> 定位符：定位符又分为行定位符和单词定位符. 行定位符号用于标注字符串的 ^起始 与 $结束位置  单词定位符 \b:匹配必须是一个完整的单词. \B 则相反</p>
</body>
</html><?php }
}
