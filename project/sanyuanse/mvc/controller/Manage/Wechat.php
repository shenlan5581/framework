<?php 
use function WECHAT\WxParseMaterial;


include_once "Base.php";


class App_Controller_Manage_Wechat extends Base_Manage{
    public $key;
    public $err_code;
    public $err_msg;
    public function __construct(){
      parent::__construct();

      $this->key = Session::Get('Wechat_accesstoken');
      $this->ctr->assign('wechatkey',$this->key);
      $this->ctr->DisplaySmart('/Manage/Wechat/wxMenu.html');
    }

    public function MenuAction(){
    //获取当前目录json结构
      $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$this->key";
      $ret=CLIENT\client_Get($url);
      $ret= json_decode($ret);
     if($this->Error($ret)){
       $this->ctr->Message("success");
       $this->ctr->assign('menu',$ret);
     } else{
       $this->ctr->Message($this->err_msg,$this->$err_code);;
     }
      $this->ctr->displaysmart('/Manage/Wechat/Menu.html');
    } 


    //获取素材列表


    public function MaterialAction(){
      $url="https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=$this->key";
      $data = array(
        "type"=>'news',
        "offset"=>0,
        "count"=>2,
      );
      $ret  = CLIENT\client_post($url,JSON_encode($data));
      $ret= json_decode($ret);
     if($this->Error($ret)){
       $this->ctr->Message("success");
       $ret = WxParseMaterial($ret);
       $this->ctr->assign('material',$ret);
     } else{
       $this->ctr->Message($this->err_msg,$this->$err_code);;
     }
      $this->ctr->displaysmart('/Manage/Wechat/material.html');
    } 

    //检验错误信息  慢慢添加
    private function Error($ret){
      $ret  = get_object_vars($ret);
      // 超时
      if(isset($ret['errcode'])){
        $this->err_code = $ret['errcode'];
        $this->err_msg  = $ret['errmsg'];
      } else {
        return true;
      }
      if($this->err_code == 42001){ //处理超时
        $this->key = WxGetAccessToken();
        $this->err_msg ='Access token 已经被重置 请重试';
      }
    return false;
    }




} //class end
