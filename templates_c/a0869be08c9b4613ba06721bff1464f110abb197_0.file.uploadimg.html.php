<?php
/* Smarty version 3.1.32, created on 2018-08-27 16:46:16
  from '/home/ki/https/www/framework/mvc/view/uploadimgtest/uploadimg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b842ad8c844c3_81210090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0869be08c9b4613ba06721bff1464f110abb197' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/uploadimgtest/uploadimg.html',
      1 => 1534770932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b842ad8c844c3_81210090 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php echo '<script'; ?>
 src="/public/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/uploadimgtest/uploadimg.js"><?php echo '</script'; ?>
>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<title>upload</title>
</head> 
<body >
 <form> 
 <input id="img" type = "file" name ='img'>
 <a href="#" onclick =uploadimg() >上传</a>
</form>

</body>
</html>
<?php }
}
