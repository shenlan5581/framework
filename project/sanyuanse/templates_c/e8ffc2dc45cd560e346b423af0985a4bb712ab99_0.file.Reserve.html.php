<?php
/* Smarty version 3.1.32, created on 2018-09-21 13:15:25
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/Reserve.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba4eeed0f1f07_54744755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ffc2dc45cd560e346b423af0985a4bb712ab99' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/Reserve.html',
      1 => 1537535722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba4eeed0f1f07_54744755 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.ts-btn{
    color:rgb(216, 216, 216);
    border-style:none;
    background: repeating-linear-gradient(to bottom,rgb(54, 160, 230), rgb(28, 109, 208)80%,rgb(11, 54, 184));
    font-size:1.3em;
    width: 50vw;
    font-weight: 900;
    border-radius: 20px;
    margin-top:15vw;
}

.ts-btn:hover{
    background-color:rgb(11, 109, 179);
    width: 50vw;
    font-weight: 900px;;
}
.content{
    margin-top:180px;;
}
.item{
    margin-top:1rem;
}

img{
    margin-top:10vw;
    width:100vw;
    height:auto;
}
.input1 {
    font-size:1.2em;
    width: 800px;;
    height:140px;
    border:1px solid #aaa;
    border-radius:10px;
    }
</style>
<div class='logo-title'>
    <div>
        <div>预约-量房-设计</div>
    </div>
</div>

<img  src="/sanyuanse/logo.jpg">
    
</img>

<div class ='content k-center'> 
<form method="POST" id ='tel' action="/<?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
/Wechat/Sign/Register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
   
  <div class ='item'> 
   <span>您的姓名</span>
   <input class="input1" required="required" name='text' class="weui-input" type="name" placeholder="请输入姓名"></input>
  </div>   

  <div class ='item'> 
   <span>您的电话</span>
    <input class="input1" required="required" name='tel' class="weui-input" type="tel" placeholder="请输入手机号"></input>
   </div>  
 
    <a href="#1" onclick="form_submit()" class="weui-btn ts-btn weui-btn_primary">确定</a>
 </form>
</div>
  
<?php }
}
