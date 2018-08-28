<?php 
/*
* 图片上传公共接口
*/
class App_Controller_Public_Upload{
    private $path;
    private $local_name;
    public function __construct(){
      global $config; 
      $this->local_name = $config['local_name']; //主机名
      $this->path       = $config['sources']['UploadImagePath'];
    }
/*
* 上传图片 保存在资源文件夹且返回url
*/    
public function UploadImgAction(){
    $ctr = new Controller;
    if($_FILES["img"]['error'] >0         ||  //file error
       $_FILES["img"]['size']  > 502400   ||  //大小
       $_FILES["img"]['type'] !='image/jpeg'  //类型   
      ){
       $ctr->DisplayJson("文件上传失败",null,false);   
    }else {
      // print_r($_FILES);
       $number =  rand(0,1000000);
       $name = $number.'.jpg';
       // echo $name;
       $file = $this->path."/".$name;
       if(file_exists($file)){
          $ctr->DisplayJson("文件已存在",null,false);
        } else {
          move_uploaded_file($_FILES['img']['tmp_name'],$file);
          $file ='image/'.$name;
          $ctr->DisplayJson("成功",$file,true);
       }
    }
  }

public function UploadJPGAction(){
     $ctr = new Controller;
     if($_FILES["img"]['error'] >0         ||  //file error
     $_FILES["img"]['size']  > 502400   ||  //大小
     $_FILES["img"]['type'] !='image/jpeg'  //类型   
    ){
     $ctr->DisplayJson("文件上传失败",null,false);   
  }else {
    // print_r($_FILES);
     $number =  rand(0,1000000);
     $name = $number.'.jpg';
     // echo $name;
     $file = $this->path."/".$name;
     if(file_exists($file)){
        $ctr->DisplayJson("文件已存在",null,false);
      } else {
        move_uploaded_file($_FILES['img']['tmp_name'],$file);
        $data=array();
        $data['url'] ="http://$this->local_name/UploadImage/$name";
        $data['status'] ='success';
        $data['width'] ='300';
        $data['height'] ='200';
        echo json_encode($data);
     }
  }
}

}