<?php
/* Smarty version 3.1.32, created on 2018-09-23 17:47:19
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba7d1a7dd9195_46358657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537724837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba7d1a7dd9195_46358657 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

#cade{
    width:100%;
    height:38%;
}
#cade-back{
    top:28%;
    position: relative;
    width:90%;
    height:70%;
    background-image:url("/sanyuanse/Wx-member/bk2.png");
    background-size:105% 105%;-moz-background-size:100% 100%;
    border-radius:0.3em;
}
#cade>img{
    left:18%;
    top:6%;
    position: absolute;
    border-radius: 50%;
    width:26vw;
    z-index:1;
    box-shadow: 0.2em 0.2em 0.2em 0.2em rgba(94, 92, 92, 0.777);
}
#cade>.integral{
    left:18%;
    top:29%;
    position: absolute;
    width:8em;
    z-index:1;
}
#cade-back>span{
    left:22%;
    top:55%;
    position:relative;
    border-radius: 50%;
    width:8em;
}
.bt{
    margin-top:2vh; 
    height:10vh;
    width:20vw;
}

#p5{
    width:100%;
    margin-top:10%;
}
 </style>


<div id ='cade' class='k-center'>
        <img src ="<?php echo $_smarty_tpl->tpl_vars['user']->value['m_headimg'];?>
"></img>
     <div id = "cade-back">
                 <span><?php echo $_smarty_tpl->tpl_vars['user']->value['m_nickname'];?>
</span>
     </div>
     <div class = "integral k-row">
           您的当前积分:
          <span  class ='text-red' id ='integral'><?php echo $_smarty_tpl->tpl_vars['user']->value['m_integral'];?>
</span> 
       </div>
</div>




<div class="k-row">
    <div class="k-center bt ">
         <a href="#1" >
            <img width="90%"src=/sanyuanse/Wx-member/bt1.png></img>
         </a>
    </div>

    <div class="k-center bt ">
         <a href="#1"href="#1"onclick ="igl()" >
            <img width="90%" src=/sanyuanse/Wx-member/bt2.png></img>
         </a>
    </div>

    <div class="k-center bt">
         <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/Member/Order"  >
            <img  width="90%" src=/sanyuanse/Wx-member/bt3.png></img>
         </a>
    </div>
</div>

<div id='p5'class='k-center'>
<img  width="100%" src=/sanyuanse/Wx-member/p5.png></img>
</div>



     


      <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/Sign/Logout">exit test</a>
<?php echo '<script'; ?>
>
    var number;
    var number=  $('#integral').html();
    function igl(){
                $.ajax({
                type: 'Get',
                url:"/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/API/Sign",
                data:{
                },
                success: function (result) {
                    var json = JSON.parse(result);
                    if (json.status == true) { //success 
                        number++;
                        $('#integral').html(number);
                    }
                 ShowMsg(json.msg);
                }
              })// ajax end

    }
function ShowMsg(msg){
 var html =   
       "<div class='k-center' id = 'WX-MSG' style='position: fixed;\
                        z-index:10;\
                        top:30vh;\
                        color:rgb(191, 191, 191);\
                        width:100%;\
                        height:40vw;'>\
          <div class='k-center' style='background-color:rgba(47, 47, 47, 0.874);\
                        display:flex,\
                        flex-direction:row;\
                        justify-content:center;\
                        align-items:center;\
                        border-radius:4vw;\
                        height:100%;\
                        width:70%;'>\
               <span style='display:flex,\
                            flex-direction:row;\
                            justify-content:center;\
                            align-items:center;\
                            font-size:1em;\
                               '>\
                   <p id='MSG_content'\
                     >"+msg+"</p>\
               </span>\
          </div>\
      </div>\
"
          $('body').append(html);
          $('body').fadeIn();
          setTimeout("$('#WX-MSG').fadeOut()",2000);
          setTimeout("$('#WX-MSG').remove()",4000);
   }



<?php echo '</script'; ?>
>
<?php }
}
