<?php
//weixin公众号

class App_Controller_Wechat_Index{
   public $ctr;
   public function __construct(){
     $this->ctr=new Controller;
   }
   public function indexAction(){
        
    WECHAT\WechatCheck('xingke');      

    }



















}
