<?php
//weixin公众号
include_once "WxBase.php";
class App_Controller_Wechat_Case extends WxBase{
   public function __construct(){
     parent ::__construct();
   }

   //会员

   
   public function IndexAction(){
     $this->ctr->DisplaySmart('/Wechat/Case.html');
    }



}

