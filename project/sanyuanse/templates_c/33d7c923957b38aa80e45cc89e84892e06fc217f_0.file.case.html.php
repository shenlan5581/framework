<?php
/* Smarty version 3.1.32, created on 2018-09-20 21:48:06
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/case.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba415960a4743_20061586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d7c923957b38aa80e45cc89e84892e06fc217f' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/case.html',
      1 => 1537480083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba415960a4743_20061586 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
 body{
     font-size: 50px;

 }

</style>




<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
 <div> <?php echo $_smarty_tpl->tpl_vars['v']->value['c_article'];?>
 </div>



<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
