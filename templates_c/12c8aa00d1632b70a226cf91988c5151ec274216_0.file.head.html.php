<?php
/* Smarty version 3.1.32, created on 2018-08-25 09:17:36
  from '/home/ki/https/www/framework/mvc/view/Index/layout/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b811eb0774480_45781614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c8aa00d1632b70a226cf91988c5151ec274216' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/layout/head.html',
      1 => 1535188655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b811eb0774480_45781614 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
<link  href="/storage/a.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<style> 
body{
  margin:auto;
  background-color: rgb(237, 237, 237);
  width:80%
}

k-logo{
  font-size: 20px;
  display: inline-block;
  color:rgb(4, 4, 4);
}
header{
   display:block;
   width:100%;
   background-color: rgb(255, 255, 255);
   height: 100px;
   box-shadow: 5px 5px 12px #888888;
}
#k-menu{
   position:relative;
   margin-left:30%;
   display: inline-block;
   font-size: 15px;
   top:-10px;;
}
#k-user{
   top:-20px;;
   position:relative;
   margin-left:90%;
   display: inline-block;
   font-size: 13px;
}


</style>
 
<title>home</title>
</head>
<body>
 <header> <!--头部-->
  <logo id ='k-logo'> <!--logo-->
      <img src="/sites/Index/logo.jpg" style="padding:22px;width:50px;height:auto"></img>
  </logo>
  <span  style="position:absolute;top:40px;;color:rgb(67, 65, 67)">三原色 装饰工程有限公司 </span> 
  <span style="font-size:12px;color:rgb(8, 64, 160);position:absolute;top:59px;" > 为您打造完美家居</span>  
<div id='k-menu' >    
     <a class = 'a1' style="color:rgb(189, 57, 57)" href="#1">工程案例</a>
     <a class = 'a1' href="#1">设计效果</a>
     <a class = 'a1' href="#1">风格简介</a>
     <a class = 'a1' href="#1">样板间</a>
     <a class = 'a1' href="#1">预约</a>
     <a class = 'a1' href="#1">公司简介</a>
 </div><!--/menu end -->
 <div id='k-user'>
     <a class = 'a2' href="#1">登陆</a>
     <a class = 'a2' href="#1">注册</a>
 </div>
   <div id='picture'>
       <div>  </div>
       <div>  </div>
       <div>  </div>
       <div>  </div>
  </div>
 </div>

</header>
<?php }
}
