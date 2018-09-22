<?php
/* Smarty version 3.1.32, created on 2018-09-16 11:41:52
  from '/home/k/https/www/framework/mvc/view/Manage/wechat/wx.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e418095db14_80181239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6a5167957e70e64279b8abc1c112b87e5819e3' => 
    array (
      0 => '/home/k/https/www/framework/mvc/view/Manage/wechat/wx.html',
      1 => 1537097783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e418095db14_80181239 (Smarty_Internal_Template $_smarty_tpl) {
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
