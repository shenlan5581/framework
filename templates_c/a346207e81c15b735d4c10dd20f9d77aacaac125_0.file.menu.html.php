<?php
/* Smarty version 3.1.32, created on 2018-08-21 16:51:35
  from '/home/ki/https/www/framework/mvc/view/Manage/layout/menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7c4317b2c381_80998756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a346207e81c15b735d4c10dd20f9d77aacaac125' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Manage/layout/menu.html',
      1 => 1534870273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7c4317b2c381_80998756 (Smarty_Internal_Template $_smarty_tpl) {
?><div id='menu' >

    <style>
    .menu1{
        display: block;
        float: left;
        color:rgb(1, 14, 23);
        width:100px;
        font-size: 14px;
        padding-left:30px;
        cursor: pointer;
    }    
    .menu1 > div{
     padding: 5px;
     background-color: rgba(75, 75, 75, 0.738);
     color:rgb(10, 77, 77);
     position: fixed;
     display: none;
        padding: 2px;
    border-style:none;
    border-width: 1px;
    border-color: rgb(25, 63, 70);
    border-radius:3px; 
    }
    .menu_item{
     padding:1px;
     margin: 3px;
     display: block;
     color:rgb(255, 255, 255);
     font-size: 12px;
    }
    a{
     text-decoration:none;  
}
a:hover{
  color:rgb(86, 182, 230);
  text-decoration:none;  
     font-size: 12px;
}


   </style>
    <?php echo '<script'; ?>
> 
    var e=0;
    var status_show=false;
    $(document).ready(function(){
     $(".menu1").click(function(event){
        event = event ? event : window.event;
        var obj = event.srcElement ? event.srcElement : event.target; 
        if(e!=0 && e == obj){
           return;           
        }else {
           e=obj;
        }
        var $obj = $(obj);
        var x =  $obj.offset().top+30;
        var y =  $obj.offset().left+30;
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
    <?php echo '</script'; ?>
>


<!--主目录 -->
<div class='menu1 ' > 图片管理
     <!--二级目录 -->
     <div class >
         <a class='menu_item' href="#">幻灯片</a>
         <a class='menu_item' href="#">标题</a> 
         <a class='menu_item' href="#">家装案例</a>
     </div>
</div>
<div  class='menu1 btn1' href ='#1'>案例管理
     <!--二级目录 -->
     <div class >
         <a class='menu_item' href="#">幻灯片</a>
         <a class='menu_item' href="#">标题</a> 
         <a class='menu_item' href="#">家装案例</a>
     </div>
</div>




</div>


<?php }
}
