<?php
/* Smarty version 3.1.32, created on 2018-09-19 21:45:04
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2c36011e3f1_29584159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537393503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2c36011e3f1_29584159 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php echo '<script'; ?>
 src="/public/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Wechat/wx.js"><?php echo '</script'; ?>
>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<title>Wx</title>
</head> 
<body >

<style>
    body{
        font-size:50px;
     
   
        margin:10px;
    }
        .logo {
      width:90%;
      height:auto;
    }
    .part{
        display:flex;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
        color:rgb(138, 138, 138);
    }
    .partrait{
      border-radius: 50%;
      width:300px;
      margin:50px;
    }



</style>
        <div class="weui-flex">
                <div class="weui-flex__item">
                    <div class="placeholder">
                            <img class = "logo" src = "/sanyuanse/logo.jpg"></img>
                    </div>
                </div>
        </div>
        <div class="weui-flex">
                <div class="weui-flex__item">
                    <div class="placeholder">
                          <div class = "part">
                            <img class = "partrait" src = "/sanyuanse/2.jpeg"></img>
                            <div>BIG FISH</div>
                          </div>
                    </div>
                </div>
        </div>

  

    
        <div class="weui-flex">
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
        </div>



</body>
</html>





<?php }
}
