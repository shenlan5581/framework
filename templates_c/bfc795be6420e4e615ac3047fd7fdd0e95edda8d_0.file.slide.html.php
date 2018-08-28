<?php
/* Smarty version 3.1.32, created on 2018-08-28 01:20:05
  from '/home/ki/https/www/framework/mvc/view/Manage/index/slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b84a3452244e2_81629747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc795be6420e4e615ac3047fd7fdd0e95edda8d' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Manage/index/slide.html',
      1 => 1535419203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b84a3452244e2_81629747 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
#slide{
    margin: 20px;
}

</style>
<div id="slide"> 
<span>幻灯片列表:</span>

<div class="container-fluid ">
        <div class="row">
                <div class="col-lg-3">
                    <img>微缩图<img>
                </div>
                <div class="col-lg-2">
                    <img>标题<img>
                </div>
                <div class="col-lg-5">
                   <button class="btn">操作</button>
                </div>
        </div>
<hr>
        <div class="row">
                <div class="col-lg-3">
                    <img src="/sites/Manage/1.jpg" style="height:50px;width:auto"><img>
                </div>
                <div class="col-lg-2">
                    <img>优惠活动1<img>
                </div>
                <div class="col-lg-1">
                   <button class="btn btn-light">编辑</button>
                </div>
        </div>

<hr>

        <div class="row">
                <div class="col-lg-3">
                    <img src="/sites/Manage/2.jpg" style="height:50px;width:auto"><img>
                </div>
                <div class="col-lg-2">
                    <img>优惠活动1<img>
                </div>
                <div class="col-lg-1">
                   <button class="btn btn-light">编辑</button>
                </div>
        </div>

<hr>

        <div class="row">
                <div class="col-lg-3">
                    <img src="/sites/Manage/3.jpg" style="height:50px;width:auto"><img>
                </div>
                <div class="col-lg-2">
                    <img>优惠活动1<img>
                </div>
                <div class="col-lg-1">
                   <button class="btn btn-light">编辑</button>
                </div>
        </div>

</div>

</div>




     <link  href="/public/Jcrop/css/jquery.Jcrop.css" rel="stylesheet">
<style>
    #kid{
        width:200px;
        height:500px;
        position:relative; /* or fixed or absolute */
    }

</style>





     
     <?php echo '<script'; ?>
 src="/public/Jcrop/js/jquery.Jcrop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
    });
<?php echo '</script'; ?>
>




<?php }
}
