<?php
/* Smarty version 3.1.32, created on 2018-09-21 15:34:45
  from '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/member/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba50f9573bcb0_30720317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77023bebc30d7af1e97650554b71eb898351f883' => 
    array (
      0 => '/home/ki/https/www/framework/project/sanyuanse/mvc/view/Manage/member/list.html',
      1 => 1537543892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba50f9573bcb0_30720317 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-secondary"  style="background-color: rgb(255, 255, 255)"="alert"> 
        <span> 用户-会员 列表：</span><br>
        <span style="font-size: 10px;">用户信息相关</span> 
     </div>
     
     <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-3 column">
            <!-- 类型 -->
                    <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend ">
                              <label class="input-group-text">按名称查找</label>
                             <form atcion ="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Manage/Member/MemberList">
                                <input type='text'name='nk_name' ></input>
                            </div>
                        <button type ="submit" class="btn  btn-sm btn-success">查找</button>
                      </div>
                            </form>
                    
            </div>
      
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">头像</th>
            <th scope="col">昵称</th>
            <th scope="col">电话</th>
            <th scope="col">积分</th>
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
            <td><img  style="height:50px;width:auto" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['m_headimg'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_nickname'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_tel'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_integral'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_date'];?>
  </td>
            <td>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
/Manage/Member/MemberDelete?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['m_id'];?>
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
