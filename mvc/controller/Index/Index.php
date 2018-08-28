<?php

class Index_Base{
  private $ctr;
  private $data;

}
class App_Controller_Index_Index extends Index_Base {
      public function __construct(){
        $this->ctr=new Controller;
        $this->ctr->DisplaySmart("Index/layout/head.html");
      }
      public function __destruct(){
        $this->ctr->DisplaySmart("Index/layout/foot.html");
      }

    public function indexAction(){
        $this->ctr->assign('size','88');
        $this->ctr->DisplaySmart("Index/index.html");
    }

    public function mapAction(){
        $this->ctr->DisplaySmart("Index/map.html");
    }






    public function formtestAction(){
        $ctr = new Controller();
        $para = array(  //数据接口定义 
            'text'=>''
        ); 
        $ctr->GetParam($para);//填充
        print_r($para);
        echo "Input test ok";
        
    }
}
