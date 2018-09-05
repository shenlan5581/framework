<?php
/* Smarty version 3.1.32, created on 2018-09-01 09:04:01
  from '/home/k/https/www/framework/mvc/view/Manage/Admin/AdminEdit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a5601475aa0_64237941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25b0ec0693d58736a204bd8dc06bd043c37a5bdf' => 
    array (
      0 => '/home/k/https/www/framework/mvc/view/Manage/Admin/AdminEdit.html',
      1 => 1535785905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a5601475aa0_64237941 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
   <div class="alert alert-success" role="alert">
   <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

     </div>
   <?php }?>
<div id='login ' >
        <div class="container">
                <div class="row clearfix">
                    <div class="col-md-4 column">
                    </div>
                    <div class="col-md-4 column">
                    <h4 style="display: block" class ="m-auto"> <?php if (isset($_smarty_tpl->tpl_vars['oper']->value)) {
echo $_smarty_tpl->tpl_vars['oper']->value;
} else { ?>创建<?php }?> </h4>
                        <form method="POST" action="/Manage/Admin/AdminEdit"      class="form-horizontal" role="form">
                            <div class="form-group">
                    <hr>
                                <div class="col-sm-12">
                                    用户名
                   <input class="form-control"  name ='name' id="inputEmail3" value="<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {
echo $_smarty_tpl->tpl_vars['admin']->value;
} else {
}?>" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    密码  <input name ='pass1' class="form-control" id="inputPassword3" type="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    密码确认  <input name='pass2' class="form-control" id="inputPassword3" type="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    邮箱<input name='email' class="form-control" id="inputPassword3" type="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    权限等级
                                        <select onchange=search() name='level'  id = 'level' class="custom-select" id="inputGroupSelect01">
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                  <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['level']->value) {?>
                                                  <option selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                  <?php } else { ?>
                                                  <option value=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                  <?php }?>
                                                <?php }
}
?>
                                                </select>
                                </div>
                                <input type ="hidden" name='edit_id' value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>"></input>
                                <input type ="hidden" name='id' value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>"></input>
                                <input type ="hidden" name='oper' value="commit"></input>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                    <hr>
                                     <button type="submit" class="btn btn-info">提交</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-4 column">
                    </div>
                </div>
            </div>

</div>

<?php }
}
