<?php
/* Smarty version 3.1.32, created on 2018-09-22 13:14:42
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba64042cbc889_64551269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537564420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba64042cbc889_64551269 (Smarty_Internal_Template $_smarty_tpl) {
?><style>


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

</div>
<div id="MSG"> 
<div class='MSG k-center'>
<span class='MSG k-row'>
   <p id = 'MSG_p'><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></p>
</span>
</div>
</div>


        <div class="weui-flex">
                <div class="weui-flex__item">
                    <div class="placeholder">
                          <div class = "part">
                            <div>
                                <img class = "partrait" src = "/sanyuanse/2.jpeg"></img>
                                <span><?php echo $_smarty_tpl->tpl_vars['user']->value['m_nickname'];?>
</span>
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
            <span id = 'igl' class ="text-red"><?php echo $_smarty_tpl->tpl_vars['user']->value['m_integral'];?>
</span>
       </div>


    <a href="#1"onclick ="igl()"class="weui-btn k-btn2  weui-btn_plain-default">
         <p>会员签到 </p>  
    </a>
    <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/Member/Order"  class="weui-btn k-btn2  weui-btn_plain-default">
         <p>我的装修</p>  
    </a>

    <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/Sign/Logout">exit test</a>
<?php echo '<script'; ?>
>
    var number;
    var number=  $('#igl').html();
    function igl(){
                $.ajax({
                type: 'Get',
                url:"/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/API/Sign",
                data:{
                },
                success: function (result) {
                    var json = JSON.parse(result);
                     var msg = $('#MSG_p').html(json.msg);
                    if (json.status == true) { //success 
                        number++;
                        $('#igl').html(number);
                                             
                    } else {  //failed
                    }
                 showmsg();
                }
              })// ajax end

    }
function showmsg(){
         var msg = $('#MSG_p').html();
        if(msg){
          $('#MSG').fadeIn();
          setTimeout("$('#MSG').fadeOut()",2000);
        }
   }



<?php echo '</script'; ?>
>
<?php }
}
