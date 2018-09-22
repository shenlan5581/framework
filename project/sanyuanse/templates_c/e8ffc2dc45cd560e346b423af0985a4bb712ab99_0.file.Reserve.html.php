<?php
/* Smarty version 3.1.32, created on 2018-09-22 22:25:57
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/Reserve.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba6c175c5d788_54177055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ffc2dc45cd560e346b423af0985a4bb712ab99' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/Reserve.html',
      1 => 1537655156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba6c175c5d788_54177055 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.ts-btn{
    color:rgb(216, 216, 216);
    border-style:none;
    background: repeating-linear-gradient(to bottom,rgb(54, 160, 230), rgb(28, 109, 208)80%,rgb(11, 54, 184));
    font-size:1.3em;
    width: 50vw;
    font-weight: 900;
    border-radius:1vw;
    margin-top:15vw;
}
.ts-btn:hover{
    background-color:rgb(11, 109, 179);
    width: 50vw;
    font-weight: 900px;;
}
.content{
    position:relative;
    top:45vw;
    margin-bottom:60vw;
}
.item{
    display:flex;
    flex-direction:row;
    justify-content:space-around;
    align-items:center;
    margin-top:20px;
}
.item>span{
   color:rgb(36, 36, 36); 
}

.input1 {
    color:rgb(23, 61, 91);
    font-size:1em;
    width: 70%;;
    height:10vw;
    border:1px solid rgb(203, 203, 203);
    border-radius:1vw;
    }
#wxmsg{
  display:none;
}
</style>
<div id="wxmsg"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></div>

<div class ='content'> 
<form method="POST" id ='fm' action="/<?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
/Wechat/Reserve">
  <div class ='item'> 
   <span>您的姓名</span>
   <input class="input1" required="required" name='name' class="weui-input" type="text" placeholder="请输入姓名"></input>
  </div>   
  <div class ='item'> 
   <span>您的电话</span>
    <input class="input1" required="required" name='tel' class="weui-input" type="tel" placeholder="请输入手机号(11位电话号码）"></input>
   </div>  
  <div class ='item'> 
   <span>装修地址</span>
    <input class="input1" required="required" name='addr' class="weui-input" type="text" placeholder="你要装修的地址"></input>
   </div>  
  <div class ='item'> 
   <span>您的留言</span>
    <input class="input1" required="required" name='note' class="weui-input" type="text" placeholder="留言"></input>
   </div>  

  <div class ='item'> 
   <span>客户服务经理：</span>
   <span>xxx</span>
  </div>  

  <div class ='item'> 
   <span>客户服务经理：</span>
   <span>xxx</span>
  </div>  

    <a href="#1" onclick="form_submit()" class="weui-btn ts-btn weui-btn_primary">确定</a>
 </form>
</div>
  
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        var msg = $('#wxmsg').html();
         if(msg){
           ShowMsg(msg);
         }
    });
 
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




     function form_submit(){
         var myform=document.getElementById("fm");
         myform.submit();
     }
 <?php echo '</script'; ?>
>
 <?php }
}
