<?php
/* Smarty version 3.1.32, created on 2018-09-22 11:28:04
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba627440189a6_62441247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5128cfdb3725011095170316f654164de798ebb8' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/register.html',
      1 => 1537615681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba627440189a6_62441247 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>

<?php echo '<script'; ?>
 src="/public/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/public/weui/dist/style/weui.min.css"/>
<link rel="stylesheet" href="/storage/k.css"/>
<body>
<style>
    body{
    font-size:50px;
    }
    .boss{
        font-size:50px;
        display:flex;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
        margin:50px;
    }
    .input1 {
        font-size:1.2em;
        width: 800px;;
        height:140px;
        border:1px solid #aaa;
        border-radius:10px;
        margin-top:50px;
        margin-bottom:100px;
    }
    .logo {
      width:90%;
      height:auto;
    }
    .member{
        padding:10px;
        color:rgb(160, 8, 8);
    }

.content1{
    color:rgb(57, 57, 57);
    font-size: 0.9em;
    height:300px;
    width:70%;
    border-radius:15px;
    padding:80px;
    margin-bottom:20px;
    margin-top:50px;
    text-align: left;
}
</style>
<div class='logo-title'>
        <div>
            <div>会员-注册</div>
        </div>
</div>
<div id="WxMSG"> 
<div class='WxMSG k-center'>
<span class='WxMSG k-row'>
   <p id = 'WxMSG_p'><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></p>
</span>
</div>
</div>


<div class ="boss">
 <div class ='member'>
     <span>会员权益:</span>
     <div class ='content1'>
         <ul>
           <li>查看工程进度 </li>   
           <li>会员折扣 </li>   
           <li>优惠大礼包 </li>   
         </ul>
     </div>
 </div>
 <div class ="text1">输入手机号码即刻成为会员</div>
 <form method="POST" id ='tel' action="/<?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
/Wechat/Sign/Register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
    <input class="input1" required="required" name='tel' class="weui-input" type="tel" placeholder="请输入手机号"></input>
    <a href="#1" onclick="tel_submit()" class="weui-btn k-btn2 weui-btn_primary">确定</a>
  </form>
</div>

<div class="weui-toast__content"></div>


<?php echo '<script'; ?>
>
   $(document).ready(function(){
       var msg = $('#MSG_p').html();
        if(msg){
          $('#WxMSG').fadeIn();
          setTimeout("$('#WxMSG').fadeOut()",2000);
        }
   });


    function tel_submit(){
        var myform=document.getElementById("tel");
        myform.submit();
    }
<?php echo '</script'; ?>
>


 
</body>
<style>
        foot{
            width:100%;
            margin-top:80px;
            font-size:1em;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            color:rgb(19, 19, 19);
         
        }
        foot>div{
            width:80%;
            display:flex;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-top: 1px solid #aaa;
            
        }
        
        foot>div>p{
            display: block;
            font-size:0.8em;
            color:rgb(45, 45, 45);
        }
            
        </style> 
        <foot>
            <div>
            <span>郑州三原色</span>
            <p>郑州市上街区许昌路中段</p>
            </div>
        </foot>

</head>

</html><?php }
}
