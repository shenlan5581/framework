<?php
include_once "WxBase.php";
class App_Controller_Wechat_Member extends WxBase{
   public $ctr;
   public function __construct(){
     parent ::__construct();
     $this->ctr=new Controller;
   }
   public function IndexAction(){
  
    $this->ctr->DisplaySmart('/Wechat/member.html');
    }
    public function TestAction(){

      $this->ctr->DisplaySmart('/Wechat/test.html');
        

        
     
    }

}