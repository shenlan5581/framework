<?php
/* Smarty version 3.1.32, created on 2018-09-17 19:23:35
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/view-layout/menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9fff376f0355_72699277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8817ea4d874c57e8a7199991ad6c5bec016ce26a' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/view-layout/menu.html',
      1 => 1537211226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9fff376f0355_72699277 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.c1{
  color:red;


}


a{
  font-size:12px;
}
button{
  font-size:12px;
}
</style>
<!--主目录 -->
<div id='k-menu ' >    
        <nav class="navbar navbar-expand-lg navbar-light navbar-sm " style="font-size:13px;  background-color: #5d939a;">

                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle "   href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " style="color:rgb(0, 0, 0)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        系统管理 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/sanyuanse/Manage/System/Log">日志</a>
                        <a class="dropdown-item" href="/sanyuanse/Manage/System/CleanLog">日志清理</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/sanyuanse/Manage/System/CleanCache">缓存清理</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " style="color:rgb(0, 0, 0)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         权限
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/sanyuanse/Manage/Admin/Admin">管理员列表</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/sanyuanse/Manage/Admin/AdminEdit">创建管理员</a>
                      </div>

   
                  </ul>
                </div>
              </nav>
     </div>
<?php }
}
