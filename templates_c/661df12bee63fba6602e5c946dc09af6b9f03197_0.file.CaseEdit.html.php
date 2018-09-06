<?php
/* Smarty version 3.1.32, created on 2018-09-05 21:46:46
  from '/home/ki/https/www/framework/mvc/view/Manage/Case/CaseEdit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b904ec634cac6_15843425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661df12bee63fba6602e5c946dc09af6b9f03197' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Manage/Case/CaseEdit.html',
      1 => 1536184003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b904ec634cac6_15843425 (Smarty_Internal_Template $_smarty_tpl) {
?>
<strong>
    <?php if (isset($_smarty_tpl->tpl_vars['oper']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['oper']->value;?>
 
    <?php }?>
</strong>

<form method="Post" action='/Manage/Case/CaseEdit'>
<div class="container" >
    <div class ="row clearfix">
    
            <div class ="col-sm-6">
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span style = 'width:80px'class="input-group-text">标题</span>
                </div>
                   <input required="required"  name='title' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_title'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['c_title'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>  

        <div class ="row clearfix">
            
                    <div class ="col-sm-6">
                        <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span style = 'width:80px'class="input-group-text">简介</span>
                        </div>
                           <textarea required="required"  name='biref' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_biref'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['c_biref'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_biref'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['c_biref'];?>
 <?php }?>
                            </textarea>
                        </div>
                    </div>
                </div>  

    <div class ="row clearfix">
            <div class ="col-sm-6">
                      <img id ='lit_img' class='border02' style ="text-align:center;font-size:15px;background-color:rgb(239, 237, 237); height:100px;width:auto;margin:5px;display:block"src="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_title_img'];?>
" alt='微缩图'></img>  
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span style = 'width:80px'class="input-group-text">微缩图</span>
                </div>
                   <input  required="required"  name='title_img' type="text" id ='title_img' value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_title_img'])) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['c_title_img'];?>
 <?php }?>" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                   <?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_title_img'])) {?>
                      <button type="button"class ="btn btn-sm btn-info" onclick=k_crop()>替换</button>
                   <?php } else { ?>
                      <button type="button"class ="btn btn-sm btn-info" onclick=k_crop()>上传</button>
                   <?php }?>
                </div>
            </div>
    </div> <br>
    
    <div class ="row clearfix">
                <div class="col-sm-6 column">
                        <!-- 类型 -->
                                <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend ">
                                          <label   style = 'width:80px'class="input-group-text">类型</label>
                                        </div>
                                       <select name='type'   id = 'type' class="custom-select custom-select-sm" >
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                  <?php if ($_smarty_tpl->tpl_vars['row']->value['c_type'] == $_smarty_tpl->tpl_vars['k']->value) {?>
                                                    <option selected =<?php echo $_smarty_tpl->tpl_vars['row']->value['c_type'];?>
 value =<?php echo $_smarty_tpl->tpl_vars['row']->value['c_type'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                              <?php } else { ?>
                                                   <option  value =<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                              <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                      </select>
                                      </div>
               </div>
    </div> 

    <div class ="row clearfix">
            <div class="col-sm-6 column">
                    <!-- 类型 -->
                            <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend ">
                                      <label style = 'width:80px' class="input-group-text">风格</label>
                                    </div>
                                   <select name='style'  id = 'type' class="custom-select custom-select-sm" >
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['style']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                              <?php if ($_smarty_tpl->tpl_vars['row']->value['c_style'] == $_smarty_tpl->tpl_vars['k']->value) {?>
                                                <option selected =<?php echo $_smarty_tpl->tpl_vars['row']->value['c_style'];?>
 value =<?php echo $_smarty_tpl->tpl_vars['row']->value['c_style'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                          <?php } else { ?>
                                               <option  value =<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                          <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </select>
                                  </div>
           </div>
</div> 

 <div class ="row clearfix">
        <div class ="col-sm-8">
                <textarea required="required"   name='html' id="editor_id" name="content" >
                    <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['c_articel'];
}?>
                </textarea>
                <br>
                <input type ="hidden" name='id' value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value['c_id']) || isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['c_id'];
}?>"></input>
                <input type ="hidden" name='oper' value="commit"></input>
                <button   type="submit" class= 'btn btn-dark'>save</button>       
        </div> 
</div>  

</form>


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



$('#title_img').change(function(){
    var url =$('#title_img').val();
    $('#lit_img').attr('src',url);
   });

   <?php echo '</script'; ?>
>
  






  <!-- 图片裁剪 
doc: 使用Jcrop 作为前端处理
流程->外部调用 显示模态框 ->上传图片->对图片裁切->保存->调用回调

-->
<div id ="crop" style="margin:10px;" >
        <?php echo '<script'; ?>
 src="/public/Jcrop/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/public/Jcrop/js/jquery.Jcrop.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/public/Jcrop/js/jquery.color.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
        // 全局存储变量
           var api =null;
           var img_info=null;  //图片路径信息
           var point =null;     //裁切坐标
           var param;
        
        // 外部调用函数
        function k_crop(para){
            $('#exampleModal').modal({
                backdrop:'static',
                keyboard:false
            });
            $('#exampleModal').modal('show');
            param=para;
        }
        /* 回调函数 裁剪成功调用*/
        function crop_callback(){
         $('#title_img').val(img_info['url']);
         $('#lit_img').attr('src',img_info['url']);
        }
        function crop($){
            jQuery(function($){
            $('#target').Jcrop({
              onSelect:showCoords,
        //      onChange:showpoint,
              bgOpacity: 0.5,   //透明度
              bgColor: 'white', //背景色
              addClass: 'jcrop-light',
              aspectRatio:16/9,  //宽高比
              boxWidth:500,
              boxHeight:500,
            //   setSelect:[20,50,50,70],   //初始化选择区域   
          },function(){ api=this;   });
        });
        }
        function showCoords(c){  //c
            point=c;
        }
        function cancel(c){
         var data={
             'path':img_info['path']
            } ;
        
            if(img_info==null){
                return;
            } else {
                $.ajax({
                type: 'Get',
                url:'/Public/Upload/DeleteFile',
                data:data,
                success: function (result) {
                    var json = JSON.parse(result);
                    if (json.status == true) { //success 
                        api.destroy();  
                        $("#pic").empty();  //清空div
                    } else {  //failed
                        alert(json.msg);
                    }
                }
              })// ajax end
            }
          }
        
        //第二此裁剪
        function saveimg(){   //cb
            if(point == null){
                return
            }
            point= JSON.stringify(point);
            data={
             'point':point,
             'path':img_info['path'],
            }
            $.ajax({
            type: 'Get',
            url: '/Public/Upload/CropImg',
            data:data,
            success: function (result) {
                var json = JSON.parse(result);
                if (json.status == true) { //success 
                    $('#exampleModal').modal('hide');
                    api.destroy();  
                    $("#pic").empty();  //清空div
                    crop_callback();
                } else {  //failed
                    alert(json.msg);
                }
            }
        })// ajax end
        }
        // 第一次上传文件
        function uploadimg(){
          var formData =  new FormData($('#upload')[0]);
         // var fileList = $("#img").files;      //获取文件
         // formData.append('jpg', fileList[0]); //添加文件 
          $.ajax({
            type: 'Post',
            processData: false,//用于对data参数进行序列化处理 这里必须false
            contentType: false, //必须 
            url: '/Public/Upload/UploadImg',
            data:formData,
            success: function (result) {
                $("#target").css('');
                var json = JSON.parse(result);
                if (json.status == true) { //success 
                    img_info=json.data;
                    if(api !=null){
                    $("#pic").empty();  //清空div
                    var html="<img  id='target' src="+json.data['url']+"></img>";  //添加目标
                    $("#pic").append(html);
                    api.destroy();  
                    crop();  //裁剪
                    }else{
                    var html="<img id ='target' src="+json.data['url']+"></img>";
                    $("#pic").append(html);
                    crop();
                    }
                } else {  //failed
                   alert(json.msg);
                }
            }
        })// ajax end
        }
           <?php echo '</script'; ?>
>
           <link rel="stylesheet" href="/public/Jcrop/css/jquery.Jcrop.css" type="text/css" />
        
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content"  style="width:600px;" > <!--改大小-->
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">图片裁切</h5><br>
                      <span style="font-size: 10px;">仅支持 jpg 图片格式 且最大2M </span>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
        
                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                    </div>
                                    <div class="custom-file">
                                    <form id="upload">
                                      <input type="file" name='img' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    </form>
                                      <label class="custom-file-label" for="inputGroupFile01">选择文件</label>
                                    </div>
                                  </div>
        
                            <button type='button' class ="btn btn-info" onclick =uploadimg() >上传</button>
                       <div id="pic"> 
                       </div>
        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm btn-secondary" onclick=cancel()  data-dismiss="modal">取消</button>
                      <button type="button" onclick=saveimg() class ="btn btn-sm btn-primary">保存</button>
                    </div>
                  </div>
                </div>
              </div>
         
        
        <?php }
}
