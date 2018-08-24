<?php
/* Smarty version 3.1.32, created on 2018-08-21 09:42:59
  from '/home/ki/https/www/framework/mvc/view/Manage/Admin/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7bdea30f0632_45238470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074e103929e449a33ae1907b66da8599a76a8511' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Manage/Admin/register.html',
      1 => 1534844568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7bdea30f0632_45238470 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="/Manage/Admin/public.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/Manage/Admin/public.js" ><?php echo '</script'; ?>
>

<div class="container">
        <div class="row title"> 
           <div class=" col-lg-12 ">
               
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row form"> 
            <div class=" col-sm-12 login ">
                <form  method='GET'   onsubmit="return CheckRegisterFrom(this)"  name='login' action="/Manage/Admin/Login">
                 <span class ="sp1">用户名</span><input class ='input1' name='admin' required='required' type='text'></input><br>
                 <span class ="sp1">密码</span><input class ='input1' name='pass1' required='required' type='text'></input><br>
                 <span class ="sp1">再次输入密码</span><input class ='input1' name='pass2' required='required' type='text'></input><br>
                 <span class ="sp1">电话</span><input class ='input1' name='phone' required='required' type='text'></input><br>
                 <span class ="sp1">邮箱</span><input class ='input1' name='email' required='required' type='text'></input><br>
                       </span><input name='resubmitID' type='hidden' ></input>

                        
                 <span class ="sp1"></span> <button  href="#1"  class='btn1 a1'>确定</button> <a href = "/Manage/Admin/Register" class='a1'>注册</a><br>
                </form>
            </div>
        </div>
    </div>
    </div><?php }
}
