<?php 
/*
* 图片上传公共接口
*/

class App_Ctr_Public_UploadImage{
    private $path;
    private $local_name;
    public function __construct(){
       global $config; 
      $this->local_name = $config['local_name']; //主机名
      $this->path = $config['uploadImagePath'];
    }
/*
*   上传图片 保存在资源文件夹且返回url
*/    
public function UploadIMGAction(){
    $ctr = new CTRL;
    if($_FILES["img"]['error'] >0    ||         //file error
       $_FILES["img"]['size']  > 1024 ||
       $_FILES["img"]['type'] !="img/image/jpg/jpeg/" 
      ){
        $ctr->DisplayJson("文件上传失败",null,false);   
    }else {
       $name = $_FILES['img']['name'];
       $number =  read(0,1000000);
       $name = $name+$number;
       $file = $this->path."/".$name;
       if(file_exists($file)){
        $ctr->DisplayJson("文件已存在",null,false);
        } else {
        move_uploaded_file($_FILES['img']['tmp_name'],$file);
        $file = $this->local_name."/".$file;
        $ctr->DisplayJson("成功",$file,true);
       }
    }
 }




}