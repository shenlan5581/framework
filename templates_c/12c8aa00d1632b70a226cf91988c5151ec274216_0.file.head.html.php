<?php
/* Smarty version 3.1.32, created on 2018-08-25 20:22:50
  from '/home/ki/https/www/framework/mvc/view/Index/layout/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b81ba9a1344f8_71644556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c8aa00d1632b70a226cf91988c5151ec274216' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/layout/head.html',
      1 => 1535228568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b81ba9a1344f8_71644556 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
<link  href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/public/popper.js"><?php echo '</script'; ?>
>
<link  href="/storage/a.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<style> 
body{
  margin:auto;
  background-color: rgb(255, 255, 255);
  width:80%
}

#k-logo{
   width:100%;
   height:60px;
   text-align: center
}
header{

}
#k-menu{
}
#k-user{
   top:20px;;
   position:relative;
   margin-left:92%;
   display: inline-block;
   font-size: 13px;
}

</style>



<title>home</title>
</head>


<body>

  <div id ='k-logo'> <!--logo-->
      <span style="position:absolute;top:20px;color:rgb(0, 0, 0)"> LOGO </span> 

      <div id='k-user'>
          <a class = 'a2' href="#1">登陆</a>
          <a class = 'a2' href="#1">注册</a>
      </div>

  </div>

 <!--/menu -->
<div id='k-menu ' >    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					  <a class="nav-link" href="#">主页<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">工程案例</a>
					</li>
            <!--  下拉-->
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              过往项目
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">家装案例</a>
						<a class="dropdown-item" href="#">工装案例</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">预约</a>
					  </div>
          </li>
          
					<li class="nav-item">
					  <a class="nav-link " href="#">线上预约</a>
          </li>

					<li class="nav-item">
					  <a class="nav-link " href="#">装修小知识</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link " href="#">服务保障</a>
					</li>

					<li class="nav-item">
					  <a class="nav-link " href="#">优惠活动</a>
          </li>

					<li class="nav-item">
					  <a class="nav-link " href="#">关于我们</a>
					</li>
				  </ul>
				  <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
				  </form>
				</div>
			  </nav>
 </div>
 <!--/menu end -->

<hr>


 <!-- 轮拨-->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" style ="height:500px;width:auto"src="/sites/Manage/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" style ="height:500px;width:auto"src="/sites/Manage/3.jpg"  alt="Second slide">
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" style ="height:500px;width:auto"src="/sites/Manage/1.jpg"  alt="Third slide">
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
 <!-- 轮拨-->
<br>
<?php }
}
