<?php
//微信基类 
class WxBase{
   public $user; //用户数据信息
   public $cte ;
   public function __construct(){
			 $wxid = Session::Get('Wx_id');
			 if($wxid){ 
				//  $this->user = GetUserInfo($m_id);
			 } else {
				//  $wxid = WECHAT\GetUserInfo($code); 
				//  $this->user = GetUserInfo($m_id);
						if($this->user){
							 $wxid = Session::Set('Wx_id');
						} else {   //不是会员
            $this->Loaction('Wechat/Sign/Register');
					 }
			 }
  }

        
  private function Islogin(){
			 return (Session::Get('Wx_id');
  }


}
