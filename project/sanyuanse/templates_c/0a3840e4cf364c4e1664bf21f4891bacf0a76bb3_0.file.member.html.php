<?php
/* Smarty version 3.1.32, created on 2018-09-20 13:05:51
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba39b2f514a48_92757786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537448750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba39b2f514a48_92757786 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
   html{
       font-size: 60px;
       background: radial-gradient(rgb(44, 109, 114), rgba(9, 73, 91, 0.619)),url(/sanyuanse/bk.jpg);
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


        </style>

<div class='logo-title'>
            <div>
                    <div>会员-积分</div>
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
