<?php
/* Smarty version 3.1.32, created on 2018-09-20 15:09:20
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3b820d16d17_25612180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537456158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3b820d16d17_25612180 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
   html{
       font-size: 40px;
       background:radial-gradient(rgb(255, 255, 255), rgb(255, 255, 255)80%);
   }

    .part{
        display:flex;
        flex-direction:column;
        justify-content:conter;
        align-items:center;
        color:rgb(18, 18, 18);
        margin-bottom: 10px;
    }
    .part>div{
        display:flex;
        flex-direction:row;
        justify-content:conter;
        align-items:center;
    }
    .part>div>img{
        box-shadow: 15px 15px 10px 3px #17161676;
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
        margin: 5%;
        color:rgb(13, 136, 150);
        box-shadow: 10px 10px 3px 3px #0e0e0ebd ;
        background-color: rgba(240, 240, 240, 0.496);
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
                            <div>
                                <img class = "partrait" src = "/sanyuanse/2.jpeg"></img>
                                <span>BIG FISH</span>
                            </div>

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
            <span id = 'igl' class ="text-red"> 998</span>
       </div>


    <a href="#1"onclick ="igl()"class="weui-btn k-btn2  weui-btn_plain-default">
         <p>会员签到 </p>  
    </a>

<?php echo '<script'; ?>
>
    function igl(){
     var number;
     number=$('#igl').html();
     number++;
     $('#igl').html(number);

    }
<?php echo '</script'; ?>
>
<?php }
}
