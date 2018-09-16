<?php
/* Smarty version 3.1.32, created on 2018-09-16 18:19:03
  from '/home/ki/https/www/framework/project/framework/mvc/view/Manage/layout-home/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e9e97386a25_08680135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff3d8e65f49fd134997fb44fd8fad18481c57420' => 
    array (
      0 => '/home/ki/https/www/framework/project/framework/mvc/view/Manage/layout-home/head.html',
      1 => 1537121871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e9e97386a25_08680135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link  href="/frame/view/bootstrap/css/bootstrap.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/frame/view/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/frame/view/jquery-ui-1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
<!-- bootstrap-->
<?php echo '<script'; ?>
 src="/frame/view/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/frame/view/storage/k.js"><?php echo '</script'; ?>
>
<link  href="/frame/view/storage/k.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
</head> 


<style>

body{
 
    margin:auto;
    line-height:14px;
    font-size: 12px;
    width:99%;
}


</style>


<body>
 <div id ='admin_info'>
         WelCome: <span style="display:inline-block;margin-left:30px;font-weight:900;color:rgb(18, 116, 220)"><?php echo $_smarty_tpl->tpl_vars['user']->value['a_user'];?>
 </span>
       <a  href ="/Manage/Sign/Logout" class="btn a2 "> 退出 </a>
 <!--message-->
       <span id="MSG"></span>
 </div> 

     
   <?php }
}
