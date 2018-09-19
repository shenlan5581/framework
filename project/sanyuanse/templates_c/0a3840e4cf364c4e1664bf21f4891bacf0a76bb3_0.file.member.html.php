<?php
/* Smarty version 3.1.32, created on 2018-09-19 22:26:04
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2ccfca76282_89449082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537395963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2ccfca76282_89449082 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>

        <link rel="stylesheet" href="/public/weui/dist/style/weui.min.css"/>
        <link rel="stylesheet" href="/storage/k.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<title>会员</title>
</head> 
<body >

<style>
    body{
        display:flex;
        font-size:50px;
        margin:10px;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
    }
        .logo {
      width:80%;
      height:auto;
    }
    .part{
        display:flex;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
        color:rgb(138, 138, 138);
        margin-bottom: 100px;
    }
    .partrait{
      border-radius: 50%;
      width:300px;
      margin:50px;
    } 
    .integral{
        display:flex;
        flex-direction:row;
        margin: 3%;
        color:rgb(149, 104, 15);
    }
    .integral2{
        width:80%;
        padding:5%;
        display:flex;
        flex-direction:row;
        margin: 3%;
        color:rgb(130, 129, 126);
    }
    .nv{

        width:100%;
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

       <div class = "integral">
            <div> 当前积分; </div>
            <div class ="text2"> 999</div>
       </div>
            <div> 积分福利 </div>
       <div class = "integral2 border02">
            <div> 
             集满1000兑换
            </div>
       </div>

 <div class ='nv' >
      <a href="javascript:;" class="weui-btn k-btn2 weui-btn_primary">会员签到</a>
      <a href="javascript:;" class="weui-btn k-btn2 weui-btn_primary">查看工地进度</a>
</div>

</body>
</html>





<?php }
}
