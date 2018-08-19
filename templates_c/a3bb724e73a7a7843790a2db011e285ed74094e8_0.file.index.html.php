<?php
/* Smarty version 3.1.32, created on 2018-08-17 21:26:37
  from '/home/ki/https/www/framework/mvc/view/Index/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b773d8d1a2587_24058212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3bb724e73a7a7843790a2db011e285ed74094e8' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/index.html',
      1 => 1534541194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b773d8d1a2587_24058212 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php echo '<script'; ?>
 src="public/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploadimgtest/uploadimg.js"><?php echo '</script'; ?>
>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<title>Framework</title>
    <style>
      body{
          margin:50px;
          text-align: center;
          font-size: 15px;
          color:rgb(146, 146, 146);
      }      
      span{
         font-size:10px;
      }
    </style>
</head> 
<body>
 Frame Work 
 <span>Author:22542812@qq.com</span>
<form method="Get" action="/Index/Index/formtest">
    <input tpye='text' name='text' value="xingke"></input> 
    <button type ='commit'>COMMIT</button>
</form>

</body>
</html>
<?php }
}
