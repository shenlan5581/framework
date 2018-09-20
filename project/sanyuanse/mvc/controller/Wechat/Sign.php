<?php

// 登陆页面
class App_Controller_Wechat_Sign {
	 public $ctr;
	 public function __construct(){
	   $this->ctr = new Controller;
       $this->ctr->assign('p_name',PROJECT_NAME);
	 }
	 // list
 public function RegisterAction(){
    if($this->Islogin()){
       $this->ctr->Location('Wechat/Member');
	}    
    $code= $this->ctr->GetParam('code');
    $this->ctr->assign('code',$code);
	$tel = $this->ctr->GetParam('tel','POST');
	$tellen = strlen($tel);
	if($tel){ //注册提交
		if($tellen === 11){
			$model = new App_Model_Wechat_wechat;
			$userinfo = WECHAT\WxGetUserInfo($code); 
			$data = array(
			'm_tel'=>$tel,
			'm_openid'=>$userinfo['openid'],
			'm_nickname'=>$userinfo['nickname'],
			'm_headimg'=>$userinfo['headimgurl'],
			'm_date'=>time(),
			'm_sign'=>time(),
			);
			$ret = $model->Regesiter($data);
			if($ret){
				$this->ctr->Location('Wechat/Member');
			}else{
				$this->ctr->assign('msg','操作失败');
			}
	    }else {
     		$this->ctr->assign('msg','电话号码错误');
	 	}
	}
	$this->ctr->DisplaySmart('/Wechat/register.html');
 }

  public function LogOutAction(){
	       echo 'ok';
			Session::Destoy('Wx_id');
  }

 protected  function Islogin(){
			 return (Session::Get('Wx_id'));
  }

}

