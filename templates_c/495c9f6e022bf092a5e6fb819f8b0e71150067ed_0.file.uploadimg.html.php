<?php
/* Smarty version 3.1.32, created on 2018-08-14 16:30:25
  from '/home/https/www/framework/mvc/view/uploadimgtest/uploadimg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7303a13ca8d9_20908737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495c9f6e022bf092a5e6fb819f8b0e71150067ed' => 
    array (
      0 => '/home/https/www/framework/mvc/view/uploadimgtest/uploadimg.html',
      1 => 1534264053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7303a13ca8d9_20908737 (Smarty_Internal_Template $_smarty_tpl) {
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
 <form> 
 <input id="img" type = "file" name ='img'>
 <a href="#" onclick =uploadimg() >上传</a>
</form>

</body>
</html>
<?php }
}
