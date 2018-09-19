<?php
//微信基类 
class WxBase{
   public $user; //用户数据信息
   public $ctr ;
   public function __construct(){
	   $this->ctr = new Controller;
	   $this->user=true;
			 $wxid = Session::Get('Wx_id');
			 if($wxid){ 
				//  $this->user = GetUserInfo($m_id);
			 } else {
				//  $wxid = WECHAT\GetUserInfo($code); 
				//  $this->user = GetUserInfo($m_id);
						if($this->user){
							 $wxid = Session::Set('Wx_id',1);
						} else {   //不是会员
		      	$this->ctr->Location('Wechat/Sign/Register');
			 
					 }
			 }
  }

        
 protected  function Islogin(){
			 return (Session::Get('Wx_id'));
  }


}
