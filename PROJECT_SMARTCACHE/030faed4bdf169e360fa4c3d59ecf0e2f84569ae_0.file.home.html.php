<?php
/* Smarty version 3.1.32, created on 2018-09-17 19:25:38
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/index/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9fffb2a1a3d9_80345490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '030faed4bdf169e360fa4c3d59ecf0e2f84569ae' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/index/home.html',
      1 => 1537211226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9fffb2a1a3d9_80345490 (Smarty_Internal_Template $_smarty_tpl) {
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
