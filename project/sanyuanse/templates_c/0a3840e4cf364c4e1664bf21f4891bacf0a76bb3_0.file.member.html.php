<?php
/* Smarty version 3.1.32, created on 2018-09-20 14:00:50
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3a8124c0670_72792712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537452049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3a8124c0670_72792712 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
   html{
       font-size: 40px;
       background: repeating-linear-gradient(to right,rgb(18, 56, 60), rgba(9, 73, 91, 0.619));
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
        margin: 3%;
        font-weight: 900;
        color:rgb(240, 149, 13);
    }
    .integral2{
        padding:5%;
        display:flex;
        flex-direction:row;
        margin: 6%;
        color:rgb(176, 176, 176);
        box-shadow: 10px 10px 3px 3px #0e0e0e79 ;
        background-color: rgba(35, 34, 34, 0.496);
        font-size: 0.8em;
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





 
            <div class="k-center"> 积分福利 </div>
       <div class = "integral2 border02">
            <div> 
             <span> 满1000分赠送 </span><br>
             <span> ... ...</span><br>
             <span> 满800分赠送 </span><br>
             <span> ... ...</span><br>
             <span> 满300分赠送 </span><br>
             <span> ... ...</span><br>
            </div>
       </div>

       
       <div class = "k-center integral">
            <span> 您的当前积分: </span>
            <span class ="text-red"> 998</span>
       </div>


 <div class ='nv' >
      <a href="javascript:;" class="weui-btn k-btn2  weui-btn_plain-default">会员签到</a>
      <a href="javascript:;" class="weui-btn k-btn2  weui-btn_plain-default">查看施工进度</a>
</div>

<?php }
}
