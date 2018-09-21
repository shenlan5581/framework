<?php
/* Smarty version 3.1.32, created on 2018-09-21 15:32:48
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Reserve/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba50f207707a0_85662504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28bc61ee0dc68e8ef556b4157616837f010bfc5b' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/Reserve/list.html',
      1 => 1537543967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba50f207707a0_85662504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-secondary"  style="background-color: rgb(255, 255, 255)"="alert"> 
        <span>预约 列表：</span><br>
        <span style="font-size: 10px;">预约信息相关</span> 
     </div>
     
    <table class="table">
        <thead>
          <tr>
            <th scope="col">姓名</th>
            <th scope="col">电话</th>
            <th scope="col">地址</th>
            <th scope="col">留言</th>
            <th scope="col">日期</th>
            <th scope="col">操作</th>
          </tr>
        </thead>
        <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?> 
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['re_name'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['re_tel'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['re_addr'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['re_note'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['re_date'];?>
  </td>
            <td>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Manage/Reserve/ReserveDelete?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['re_id'];?>
" class="btn  btn-sm btn-secondary"> 删除 </a>
            </td>
          </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    
      <nav aria-label="Page navigation example" >
            <ul class="pagination">
              <li class="page-item"><a  style="color:rgb(31, 31, 31)"  class="page-link" onclick=page(<?php echo $_smarty_tpl->tpl_vars['curr_count']->value-1;?>
) href="#">上一个</a></li>
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                 <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['curr_count']->value) {?>
                <li class="page-item"><a style="color:rgb(22, 170, 180)" class="page-link" ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                 <?php } else { ?>
                <li class="page-item"><a style="color:rgb(167, 167, 167)"  class="page-link" onclick=page(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
) href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                <?php }?>
              <?php }
}
?>
              <li class="page-item"><a style="color:rgb(33, 33, 33)" class="page-link" onclick=page(<?php echo $_smarty_tpl->tpl_vars['curr_count']->value+1;?>
) href="#">下一个</a></li>
            </ul>
          </nav>
        
          <?php echo '<script'; ?>
>
        function page(index){
          if(index><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 || index < 0){
              return;
          }
          window.location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?&index='+index; 
        }

          <?php echo '</script'; ?>
>
    <?php }
}
