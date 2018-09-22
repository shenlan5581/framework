<?php
/* Smarty version 3.1.32, created on 2018-09-22 22:53:55
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/order.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba6c803490246_48592476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d490a45439b4db0b0f41aaa9fad264c3abd76f4' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Wechat/order.html',
      1 => 1537656834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba6c803490246_48592476 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.order{
 margin-top:120px;

    }
.order>st{
    display:flex;
    flex-direction:column;
    justify-content:conter;
    align-items:center;
    font-size: 2em;
    margin:8vw;
    color:rgb(23, 21, 21);
    font-weight: 900;
  
}
.red{
    color:rgb(218, 110, 43);
}
.blue{
    color:rgb(13, 133, 239);
    font-size: 1.2em;
}

.gray{
    color:rgb(48, 48, 48);
}


</style>

<?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<div class ="order">

<st class ='status'>
    <?php echo $_smarty_tpl->tpl_vars['v']->value['o_biref'];?>

</st>


<div class="weui-cell">
        <div class="weui-cell__bd">
            <p>项目</p>
        </div>
        <div class="weui-cell__ft"><?php echo $_smarty_tpl->tpl_vars['v']->value['o_title'];?>
</div>
</div>

<div class="weui-cell">
        <div class="weui-cell__bd">
            <p>项目地址</p>
        </div>
        <div class="weui-cell__ft ">
<?php echo $_smarty_tpl->tpl_vars['v']->value['o_addr'];?>

        </div>
</div>

<div class="weui-cell">
        <div class="weui-cell__bd">
            <p>项目负责人</p>
        </div>
        <div class="weui-cell__ft">
<?php echo $_smarty_tpl->tpl_vars['v']->value['o_admin'];?>

        </div>
</div>

<div class="weui-cell">
        <div class="weui-cell__bd">
            <p>项目总价</p>
        </div>
        <div class="weui-cell__ft red">
￥<?php echo $_smarty_tpl->tpl_vars['v']->value['o_price'];?>
.00
        </div>
</div>

<div class="weui-cell">
        <div class="weui-cell__bd ">
            <p>已付款</p>
        </div>
        <div class="weui-cell__ft red">
￥<?php echo $_smarty_tpl->tpl_vars['v']->value['o_pay'];?>
.00
        </div>
</div>
<a class="weui-cell weui-cell_access" href="https://mp.weixin.qq.com/mp/homepage?__biz=MzU1NzcxMzcxNg%3D%3D&hid=3&sn=b6cf388e8c61b6c2e516c9e155aed586">
        <div class="weui-cell__bd">
            <p>装修日记</p>
        <p class ='gry'></p>
        </div>
        <div class="weui-cell__ft blue">
        点击查看
        </div>
    </a>




<div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>





















<?php }
}
}
