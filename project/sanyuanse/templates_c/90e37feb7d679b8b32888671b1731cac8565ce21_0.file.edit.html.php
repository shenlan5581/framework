<?php
/* Smarty version 3.1.32, created on 2018-09-22 09:03:26
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/order/edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba6055e4ebec0_90054934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e37feb7d679b8b32888671b1731cac8565ce21' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/order/edit.html',
      1 => 1537607003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba6055e4ebec0_90054934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<strong>
        <?php if (isset($_smarty_tpl->tpl_vars['oper']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['oper']->value;?>
 
        <?php }?>
    </strong>
    
    <form method="Post" action='/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Manage/Order/OrderEdit<?php if (isset($_smarty_tpl->tpl_vars['user_id']->value)) {?>?user_id=<?php echo $_smarty_tpl->tpl_vars['user_id']->value;
}
if (isset($_smarty_tpl->tpl_vars['edit_id']->value)) {?>?edit_id=<?php echo $_smarty_tpl->tpl_vars['edit_id']->value;
}?>'>
    <div class="container-fluid" >
        <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                <div class ="col-sm-3">
                    <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span style = 'width:80px'class="input-group-text">标题</span>
                    </div>
                       <input required="required"  name='title' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_title'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_title'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>  
    
    
            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">地址</span>
                            </div>
                               <input required="required"  name='addr' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_addr'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_addr'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                                
                               </input>
                            </div>
                        </div>
                    </div>  

            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">推荐人</span>
                            </div>
                               <input name='recommend' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_recommend'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_recommend'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                                
                                 </input>
                            </div>
                        </div>
                    </div>  

            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">负责人</span>
                            </div> 
                               <input required="required"  name='admin' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_admin'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_admin'];?>
 <?php }?> "  class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                               
                        </input>
                            </div>
                        </div>
                    </div>  

            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">总造价</span>
                            </div>
                               <input id='price' required="required"  name='price' type="number"  value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_price'])) {
echo $_smarty_tpl->tpl_vars['row']->value['o_price'];
}?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                        </input>
                            </div>
                        </div>
                    </div>  

            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">已支付</span>
                            </div>
                               <input id = 'pay'required="required"  name='pay' type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_pay'])) {
echo $_smarty_tpl->tpl_vars['row']->value['o_pay'];
}?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                               
                        </input>
                            </div>
                        </div>
                    </div>  

            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">
                            <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span style = 'width:80px'class="input-group-text">进度描述</span>
                            </div>
                               <input required="required"  name='biref'  value="  <?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_biref'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_biref'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>  


            <div class ="row clearfix">
                        <div class ="col-sm-4">
                            <!--占位-->
                        </div> 
                        <div class ="col-sm-3">

                    <input type ="hidden" name='oper' value="commit"></input>
                    <button   type="submit" class= 'btn btn-dark'>save</button>      

                            </div>
                        </div>
                    </div>  




            </div> 
    </div>  
    
    </form>
    

   <?php echo '<script'; ?>
>
       $(document).ready(function (){
       $('pay').val("<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_biref'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_pay'];?>
 <?php }?>");
       $('price').val("<?php if (isset($_smarty_tpl->tpl_vars['row']->value['o_biref'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['o_price'];?>
 <?php }?>");
       });
   <?php echo '</script'; ?>
> <?php }
}
