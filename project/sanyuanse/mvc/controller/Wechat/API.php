<?php

class App_Controller_Wechat_API {
   //签到 json
    public $ctr;
    public $user;
    public $model;
    public function __construct(){
      $this->ctr=new Controller;
      $this->model=new App_Model_Wechat_wechat;
      $this->user = $this->model->GetUserInfo(Session::Get('Wx_id'));
    }

   public function SignAction(){
    $curr = $this->user['m_sign'];
    if(time() < ($curr+86400) && $curr !=0 ){
      $this->ctr->DisplayJson('您今天已经签到',array(),false);
    } else {
     if($this->model->sign($this->user['m_openid'],$this->user['m_integral'])){
     $this->ctr->DisplayJson('签到成功');
    }
   }
 }

}