<?php
/* Smarty version 3.1.32, created on 2018-09-01 09:32:21
  from '/home/https/www/framework/mvc/view/Manage/Sign/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a5ca5dbc8f8_19487027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7891c8b11696f6e0004007ba257b168be6b5433' => 
    array (
      0 => '/home/https/www/framework/mvc/view/Manage/Sign/login.html',
      1 => 1535794102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a5ca5dbc8f8_19487027 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link  href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/public/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<!-- bootstrap-->
<?php echo '<script'; ?>
 src="/public/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/storage/k.js"><?php echo '</script'; ?>
>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-Login</title>
</head> 

<style>
</style>

<body> 

<div id='login 'style="margin-top:100px;"  >
        <div class="container">
                <div class="row clearfix">
                    <div class="col-md-4 column">
                    </div>
                    <div class="col-md-4 column">
                       
                    <h4 style="display: block" class ="m-auto"> 请先登陆 </h4><span style="color:rgb(181, 31, 31)"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
                        <form method="POST" action="/Manage/Sign/Login"   class="form-horizontal" role="form">
                            <div class="form-group">
                    <hr>
                                <div class="col-sm-12">
                                   用户名 <input name ="user"class="form-control" id="inputEmail3" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">

                                    密码  <input name ="pass" class="form-control" id="inputPassword3" type="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                         <label></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                    <hr>
                                     <button type="submit" class="btn btn-dark">登陆</button>
                                     <a href="/Manage/Sign/Register"  class="btn btn-info">注册</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-4 column">
                    </div>
                </div>
            </div>

</div>


      </body>
      </html><?php }
}
