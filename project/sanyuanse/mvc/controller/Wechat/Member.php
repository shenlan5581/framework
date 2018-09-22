<?php
include_once "WxBase.php";
class App_Controller_Wechat_Member extends WxBase{
   public $ctr;
   public $model;
   public function __construct(){
     parent ::__construct();
   }
   public function IndexAction(){
    $this->ctr->assign('user',$this->user);
     
    $this->ctr->DisplaySmart('/Wechat/member.html');
    }


    //查看会员装修记录
   public function OrderAction(){
      $model = new App_Model_Wechat_wechat;
      $order= $model->Order($this->user['m_id']);
      if($order){
      $this->ctr->assign('order',$order);
      }
      $this->ctr->DisplaySmart('/Wechat/order.html');
    }

 


}