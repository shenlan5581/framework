<?php
/* Smarty version 3.1.32, created on 2018-09-19 13:29:11
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Wechat/material.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba24f27a2ff36_06496122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef7c23b7ecae4604580eb63869f1154b23fd9a45' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Wechat/material.html',
      1 => 1537363215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba24f27a2ff36_06496122 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.material{

}
.ctn{
  padding:30px;
  margin: 10px;
  border: 1px solid rgb(222, 220, 220);
  border-radius: 5px;
}
.item{

}
.me_id{
    background-color: rgb(196, 196, 196);
    color:rgb(13, 77, 126);
    margin:8px;
}
</style>
 <div class="container-fluid" >
    <div class ='row'>
    <div class ='col-2'>
    </div>

 <!--middle -->
    <div class ='col-8'>
<div class ="material">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['material']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class='ctn'>
     <div class ='me_id'>  media_id:<?php echo $_smarty_tpl->tpl_vars['item']->value['media_id'];?>
  </div> 
            <!-- id -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['content'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div  class ='content'>
            <div class ='item'> title   :<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
   </div>
            <div class ='item'> digest  :<?php echo $_smarty_tpl->tpl_vars['item']->value['digest'];?>
  </div> 
            <div class ='item'> content :<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
 </div>
            <div class ='item'> url     :<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
     </div>
                    <!-- 素材体 -->
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

    </div>
<!--middle -->

    <div class ='col-2'>
    </div>

    </div>

</div>
<?php }
}
