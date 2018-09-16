<?php
include_once "Base.php";
/*    
后台业务管理
创建业务模型文件
*/
class App_Controller_Manage_Wechat extends Base_Manage{
    public $token;
    public function __construct() {
        parent::__construct();
        $this->ctr->DisplaySmart('/Manage/wechat/menu.html');
        $this->token =Session::Get('Wechat');
        }


    //获取自定义菜单列表
   public function IndexAction(){ 
     $this->ctr->assign('token',$this->token);
     $this->ctr->DisplaySmart('/Manage/wechat/wx.html');
   }


   //curl 客户端请求
   private function Wx_Req($url,$type='Get',$data=false){
    if($type='Get'){
       $ret = CLIENT\Client_Get($url);
    }else {
        $ret  = json_decode($ret,true);
    }
       if($ret) {
        $ret  = json_decode($ret,true);
        if(in_array('errcode',$ret)){
            $errid = $ret['invalid'];
            trigger_error("errmsg=微信接口调用失败$errid", E_USER_ERROR);
            return false;
        } else {
           return $ret; 
        }
       } else{
           return false;
       }
}


}