<?php
/* Smarty version 3.1.32, created on 2018-09-16 10:28:42
  from '/home/ki/https/www/framework/mvc/view/Manage/wechat/wx.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e305ac17fc1_29483426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f2062b55b7a270b623d09b12734890f47295e0' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Manage/wechat/wx.html',
      1 => 1537047498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e305ac17fc1_29483426 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/public/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Manage/wechat/wx_menu.js"><?php echo '</script'; ?>
>
<link  href="/Manage/wechat/wx.css" rel="stylesheet">



<div id='token'><?php echo $_smarty_tpl->tpl_vars['token']->value;?>
</div>
<div id = 'menu'> 





</div>







<?php }
}
