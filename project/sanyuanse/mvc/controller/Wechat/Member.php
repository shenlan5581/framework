<?php
include_once "WxBase.php";
class App_Controller_Wechat_Member extends WxBase{
   public $ctr;
   public $user;
   public $model;
   public function __construct(){
     parent ::__construct();
     $this->ctr=new Controller;
     $this->model=new App_Model_Wechat_wechat;
     $this->user = $this->model->GetUserInfo(Session::Get('Wx_id'));
   }
   public function IndexAction(){
    $this->ctr->assign('user',$this->user);
    $this->ctr->DisplaySmart('/Wechat/member.html');
    }


     

}