<?php
/* Smarty version 3.1.32, created on 2018-08-28 13:55:17
  from '/home/https/www/framework/mvc/view/Manage/Admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b855445ecb344_74347693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc739339980bdae0ff11d6a7910bf542310ec990' => 
    array (
      0 => '/home/https/www/framework/mvc/view/Manage/Admin/login.html',
      1 => 1535109371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b855445ecb344_74347693 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form  method='GET'   onsubmit="return CheckLoginFrom(this)"  name='login' action="/Manage/Admin/Login">
                 <span class ="sp1">用户名</span><input class ='input1' name='admin' required='required' type='text'></input><br>
                 <span class ="sp1">密码</span><input class ='input1' name='pass' required='required' type='text'></input><br>
                       </span><input name='resubmit' type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['resubmitID']->value;?>
 ></input>
                 <span class ="sp1"></span> <button id='login_submit' href="#1"  class='btn1 a1'>确定</button> <a href = "/Manage/Admin/Register" class='a1'>注册</a><br>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php }
}
