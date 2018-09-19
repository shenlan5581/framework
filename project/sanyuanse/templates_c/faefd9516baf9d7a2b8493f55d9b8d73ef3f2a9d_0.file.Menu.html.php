<?php
/* Smarty version 3.1.32, created on 2018-09-18 21:53:14
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Wechat/Menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba173ca595cd7_42567834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faefd9516baf9d7a2b8493f55d9b8d73ef3f2a9d' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Wechat/Menu.html',
      1 => 1537307592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba173ca595cd7_42567834 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/storage/Wechat/public.js"><?php echo '</script'; ?>
>
<link  href="/storage/Wechat/public.css" rel="stylesheet">
    <div id='wk' ><?php echo $_smarty_tpl->tpl_vars['wechatkey']->value;?>
</div>




 <div class="container-fluid" >
     <div class ='row'>


     <div class ='col-3'>
     </div>

     <div class ='col-6'>
<div id ="Menu">
  <textarea style="width:100%;height:400px;">
         <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

  </textarea>  
</div>
     </div>

     <div class ='col-3'>
     </div>

     </div>

</div>
<?php }
}
