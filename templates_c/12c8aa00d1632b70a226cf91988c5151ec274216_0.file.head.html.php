<?php
/* Smarty version 3.1.32, created on 2018-08-24 11:04:57
  from '/home/ki/https/www/framework/mvc/view/Index/layout/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fe659c0db24_49702057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c8aa00d1632b70a226cf91988c5151ec274216' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/layout/head.html',
      1 => 1535108696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7fe659c0db24_49702057 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
<?php echo '<script'; ?>
 src="/public/jquery.js"><?php echo '</script'; ?>
>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap-->
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<style>
body{
  margin-left:5px;
  margin-right:5px;

}


#menu{
  text-align: center;
 
}
logo{
  font-size: 20px;
  display: block;
  text-align: center;
  color:rgb(4, 4, 4);
  margin:auto;
}

</style>
 


<title>home</title>
</head> 
<body>
 <header> <!--头部-->
 <logo id ='logo'> <!--logo-->
  <img src="/sites/Index/logo.jpg" style="padding:5px;width:50px;;height:auto"></img>
  <span>三原色装饰工程有限公司 </span> <span style="font-size: 13px;color:rgb(211, 164, 44);" > 打造完美家居</span>  
 </logo>
 <div id = 'menu'>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(235, 235, 235)">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">工程案例<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">设计</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">预约</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">公司简介</a>
            </li>
          </ul>
        </div>
      </nav>

 </div><!--/menu end -->

 </div>
<br>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/sites/Manage/1.jpg" alt="First slide" style="height:500px;width:auto">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/sites/Manage/2.jpg" alt="Second slide"style="height:500px;width:auto">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/sites/Manage/3.jpg" alt="Third slide"style="height:500px;width:auto">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>
<?php }
}
