<?php
/* Smarty version 3.1.32, created on 2018-09-18 09:28:59
  from '/home/https/www/framework/project/frame/mvc/view/Manage/index/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba0c55b9e7de9_84610202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16916cbf238bc7f0d738cfbfadec3d842fc5a88d' => 
    array (
      0 => '/home/https/www/framework/project/frame/mvc/view/Manage/index/home.html',
      1 => 1537123409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba0c55b9e7de9_84610202 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
    $('#home').click(function(){
        $('#home').toggle('fold',1000);
    });

    })
<?php echo '</script'; ?>
>



<div id='home' class="jumbotron">
    <h1 class="display-4"><?php echo $_smarty_tpl->tpl_vars['info']->value['pro_name'];?>
</h1>
    <p class="lead"><?php echo $_smarty_tpl->tpl_vars['info']->value['pro_com'];?>
 </p>
    <hr class="my-4">
    <p><?php echo $_smarty_tpl->tpl_vars['info']->value['pro_brief'];?>
</p>
    
 访问量
 运行时间
 注册客户
 简单数据分析

</div><?php }
}
