<?php
/* Smarty version 3.1.32, created on 2018-09-01 09:07:57
  from '/home/k/https/www/framework/mvc/view/Manage/Case/caselist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a56ed8c0881_65091486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27827e0bbf1d2baec380e4b231289728f69f1d81' => 
    array (
      0 => '/home/k/https/www/framework/mvc/view/Manage/Case/caselist.html',
      1 => 1535785905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a56ed8c0881_65091486 (Smarty_Internal_Template $_smarty_tpl) {
?>

<hr>
<form method="Post" action='/Manage/Case/CaseAdd'>
<textarea name='html' id="editor_id" name="content" style=" width:70%;height:300px;">
    请输入内容 ... ...
</textarea>
<button type="submit" class= 'btn'>save</button>

</form>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?> 
  <?php echo $_smarty_tpl->tpl_vars['row']->value['c_articel'];?>
 
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<!-- 文本编辑器组件 -->

    <?php echo '<script'; ?>
 charset="utf-8" src="/public/kindeditor/kindeditor-all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="/public/kindeditor/lang/zh-CN.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        KindEditor.ready(function(K) {
        var    options={
            items:[
                'source', '|', 'undo', 'redo', '|', 'preview',   'cut', 'copy', 'paste',
                '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|','image',
                'table', 'hr', 'pagebreak',
                    'link', 'unlink', '|', 'about'
                    ],
            uploadJson:'/Public/Upload/kindeditUpload',
            afterBlur:function(){   //关键点  获取不到内容
                        this.sync();
                       }
                    }
                    window.editor = K.create('#editor_id',options);
            });
 
    <?php echo '</script'; ?>
>
<?php }
}
