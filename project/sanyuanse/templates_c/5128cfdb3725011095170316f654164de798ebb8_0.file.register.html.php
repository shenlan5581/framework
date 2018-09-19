<?php
/* Smarty version 3.1.32, created on 2018-09-19 20:37:29
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2b389ba28d3_25496495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5128cfdb3725011095170316f654164de798ebb8' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/register.html',
      1 => 1537389447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2b389ba28d3_25496495 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/public/weui/dist/style/weui.min.css"/>
<link rel="stylesheet" href="/storage/k.css"/>

<style>
    .boss{
        font-size:50px;
        display:flex;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
        margin:10px;
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
      width:100%;
      height:auto;
    }
    .member{
        padding:10px;
        color:rgb(160, 8, 8);
    }

</style>

<div class ="boss">
  <img class = "logo" src = "/sanyuanse/logo.jpg"></img>
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
 <form>
    <input class="input1" class="weui-input" type="tel" placeholder="请输入手机号">
    <a href="javascript:;" class="weui-btn k-btn weui-btn_primary">确定</a>
  </form>
</div>
 <?php }
}
