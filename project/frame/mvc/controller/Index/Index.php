<?php

class App_Controller_Index_Index{
    private $ctr;
    private $data;


      public function __construct(){
        $this->ctr=new Controller;
        $this->ctr->DisplaySmart("Index/layout/head.html");
      }
      public function __destruct(){
        $this->ctr->DisplaySmart("Index/layout/foot.html");
      }

   //总后台管理首页
    public function IndexAction(){
        $model = new App_Model_Index_Index; //使用模型
        $list =  $model->List(array('name'=>'xingke'));
        $this->ctr->DisplaySmart("Index/index.html");
    }
}
