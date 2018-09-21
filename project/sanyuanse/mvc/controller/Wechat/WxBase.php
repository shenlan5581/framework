<?php
//微信基类 
class WxBase{
   public $user; //用户数据信息
   public $ctr ;
   public function __construct(){
	   $this->ctr = new Controller;
	   $model = new App_Model_Wechat_wechat;
	   $code =12345;
	              //$this->ctr->GetParam('code');
	   if(!$code){
		   echo "系统错误";
		   trigger_error("微信code获取失败");
		   die();
	   }
	   $this->user=false;
			$wxid = Session::Get(PROJECT_NAME.'Wx_id');
			if($wxid){ 
			   $this->user =$model->GetUserInfo($wxid); //model
			} else {
			    $userinfo = WECHAT\WxGetUserInfo($code); //获取用户openid
			    $this->user =$model->GetUserInfo($userinfo['openid']); //model
					if($this->user){       //是会员
							$wxid = Session::Set(PROJECT_NAME.'Wx_id',$this->user['m_openid']);
					} else {   //不是会员
					$this->ctr->Location("/Wechat/Sign/Register?code=$code");
					}
			}
    $this->ctr->assign('user',$this->user);
    $this->ctr->assign('p_name',PROJECT_NAME);
    $this->ctr->DisplaySmart('/Wechat/head.html');
   }

    public function __destruct(){
      $this->ctr->DisplaySmart('/Wechat/foot.html');
	}


		
  


 protected  function Islogin(){
			 return (Session::Get('Wx_id'));
  }


}
