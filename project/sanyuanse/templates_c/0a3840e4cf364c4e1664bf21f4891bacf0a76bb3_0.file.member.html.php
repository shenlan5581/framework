<?php
/* Smarty version 3.1.32, created on 2018-09-20 12:05:06
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba38cf2a75f37_57598588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537445105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba38cf2a75f37_57598588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
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
        margin-bottom: 10px;
    }
    .partrait{
      border-radius: 50%;
      width:200px;
      margin:50px;
    } 
    .integral{
        display:flex;
        flex-direction:row;
        margin: 3%;
        color:rgb(195, 120, 0);
    }
    .integral2{
        width:70%;
        padding:5%;
        display:flex;
        flex-direction:row;
        margin: 3%;
        color:rgb(130, 129, 126);
    }
    .nv{
        width:100%;
    }

        logo{
            width:100%;
        }
        logo>div{
            width:95%;
            background-color: rgb(47, 55, 57);
            height:200px;
            color:rgb(200, 194, 194);
            border-radius: 10px;
        }
        </style>
        


    <div class="weui-flex">
        <div class="weui-flex__item"><div class="placeholder">
            <logo>
                <div class="weui-flex">
                        <div class="weui-flex__item"><div class="placeholder"></div></div>
                        <div class="weui-flex__item"><div class="placeholder">会员积分</div></div>
                        <div class="weui-flex__item"><div class="placeholder"></div></div>
                    </div>
                </logo>
        </div></div>
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
            <span> 当前积分: </span>
            <span class ="text2"> 998</span>
       </div>
            <div> 积分福利 </div>
       <div class = "integral2 border02">
            <div class='text3'> 
             <span> 满1000分赠送 </span><br>
             <span> ... ...</span><br>
             <span> 满800分赠送 </span><br>
             <span> ... ...</span><br>
             <span> 满300分赠送 </span><br>
             <span> ... ...</span><br>
            </div>
       </div>

 <div class ='nv' >
      <a href="javascript:;" class="weui-btn k-btn2  weui-btn_plain-default">会员签到</a>
      <a href="javascript:;" class="weui-btn k-btn2  weui-btn_plain-default">查看施工进度</a>
</div>







<?php }
}
