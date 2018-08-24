<?php
/* Smarty version 3.1.32, created on 2018-08-24 11:08:34
  from '/home/ki/https/www/framework/mvc/view/Index/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fe732328197_27888400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3bb724e73a7a7843790a2db011e285ed74094e8' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/index.html',
      1 => 1535108912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7fe732328197_27888400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
.k-item{   
    float: left;
    width:350px;
    margin:5px;
    font-size:14px;
}
#k-template{

}
.k-title{
    font-size:20px;
    padding:3px;
    margin: 30px;
    text-align: center;
}

</style>


<div id = "k-jiazhaung">
   <div class='k-title'>
    家装案例
   </div>    
   <div class="k-item">
       <image src = "/sites/Index/2.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>
   <div class="k-item">
       <image src = "/sites/Index/3.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>
   <div class="k-item">
       <image src = "/sites/Index/4.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>
   <div class="k-item">
       <image src = "/sites/Index/5.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>
   <div class="k-item">
       <image src = "/sites/Index/6.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>
   <div class="k-item">
       <image src = "/sites/Index/7.jpg" width=350px height=250px;></image>
       <span>理想名称 现代风格</span>
   </div>

</div>




<div style="clear:both"></div>

<div id = "k-gongzhuang">
   <div class='k-title'>
     工装案例 
   </div>    
   <span>简介</span>
   <div class="k-item">
   </div>

</div>
</div>

<div style="clear:both"></div>


<?php echo '<script'; ?>
>
var obj=null;
$('.k-item').mousemove(function(event){
        event = event ? event : window.event;
        var obj = event.srcElement ? event.srcElement : event.target; 
        var $obj = $(obj);
        var d =  $obj.children("div");
        if(d == status_show){
           return;
        }
        d.css("top",x);                
        d.css("left",y);
        d.fadeIn();                
        if(status_show !== false){
           status_show.fadeOut();
           status_show=false;
        }
        status_show = d;
     });
    });
});



<?php echo '</script'; ?>
><?php }
}
