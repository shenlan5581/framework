<?php
/* Smarty version 3.1.32, created on 2018-09-22 19:56:12
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba69e5c3b9397_19412174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3840e4cf364c4e1664bf21f4891bacf0a76bb3' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/member.html',
      1 => 1537646170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba69e5c3b9397_19412174 (Smarty_Internal_Template $_smarty_tpl) {
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

#cade{
    width:100%;
    height:40%;
}
#cade-back{
    top:32%;
    position: relative;
    width:90%;
    height:60%;
    background-image:url("/sanyuanse/Wx-member/bk2.png");
    background-size:105% 105%;-moz-background-size:100% 100%;
    border-radius:0.3em;
}
#cade>img{
    left:18%;
    top:8%;
    position: absolute;
    border-radius: 50%;
    width:8em;
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
    height:10vh;
    width:20%;
}
 </style>

<div id="MSG"> 
<div class='MSG k-center'>
<span class='MSG k-row'>
   <p id = 'MSG_p'><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></p>
</span>
</div>
</div>

<div id ='cade' class='k-center'>
        <img src ="<?php echo $_smarty_tpl->tpl_vars['user']->value['m_headimg'];?>
"></img>
     <div id = "cade-back">
                 <span><?php echo $_smarty_tpl->tpl_vars['user']->value['m_nickname'];?>
</span>
     </div>

     <div class = "integral k-row">
           您的当前积分:
            <?php echo $_smarty_tpl->tpl_vars['user']->value['m_integral'];?>

       </div>
</div>




<div class="k-row">
    <div class="k-center ">
         <a href="#1" >
            <img src=/sanyuanse/Wx-member/bt1.png></img>
         </a>
    </div>

    <div class="k-center ">
         <a href="#1"href="#1"onclick ="igl()" >
            <img src=/sanyuanse/Wx-member/bt2.png></img>
         </a>
    </div>

    <div class="k-center ">
         <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Wechat/Member/Order"  >
            <img src=/sanyuanse/Wx-member/bt3.png></img>
         </a>
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
