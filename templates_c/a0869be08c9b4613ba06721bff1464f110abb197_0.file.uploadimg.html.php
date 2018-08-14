<?php
/* Smarty version 3.1.32, created on 2018-08-14 11:04:32
  from '/home/ki/https/www/framework/mvc/view/uploadimgtest/uploadimg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b72b740f27fb1_41602465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0869be08c9b4613ba06721bff1464f110abb197' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/uploadimgtest/uploadimg.html',
      1 => 1534244670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b72b740f27fb1_41602465 (Smarty_Internal_Template $_smarty_tpl) {
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

<title>upload</title>
</head> 
<body >
 <input id="img" type = "file">
</input>
    <a href="#" onclick =uploadimg() >上传</a>
</body>
</html>
<?php }
}
