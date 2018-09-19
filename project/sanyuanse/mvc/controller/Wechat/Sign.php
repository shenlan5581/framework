<?php

// 登陆页面
class App_Controller_Wechat_Sign {
	 public $ctr;
	 public function __construct(){
	   $this->ctr = new Controller;
	 }
	 // list
	 public function RegisterAction(){
    if($this->Islogin()){
       $this->Loaction('Wechat/Member');
    }    





    $this->ctr->DisplaySmart('/Wechat/register.html');
	 }




 protected  function Islogin(){
			 return (Session::Get('Wx_id'));
  }

}

