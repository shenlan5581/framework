<?php
//weixin公众号
include_once "WxBase.php";
class App_Controller_Wechat_Reserve {
     public $ctr;
     public $model;

   public function __construct(){
     $this->ctr = new Controller;
     $this->model = new App_Model_Wechat_wechat;
     $this->ctr->assign('p_name',PROJECT_NAME);
     $this->ctr->DisplaySmart('/Wechat/head.html');
   }

    public function __destruct(){
      $this->ctr->DisplaySmart('/Wechat/foot.html');
	}
   //会员
   public function IndexAction(){
       $name = $this->ctr->GetParam('name',"POST");
       $tel  = $this->ctr->GetParam('tel',"POST");
       $addr = $this->ctr->GetParam('addr',"POST");
       $note = $this->ctr->GetParam('note',"POST");
       $tellen=strlen($tel);
       $namelen=strlen($name);
       if($tel && $tel && $addr && $note ) {
          if($tellen == 11 && $namelen >3 && $namelen < 20 && $addr){
              $data=array(
                're_name'=>$name,
                're_tel'=>intval($tel),
                're_addr'=>intval($addr),
                're_note'=>intval($addr),
                're_date'=>time(),
              );
              if($this->model->Reserve($data)){
                $this->ctr->assign('msg','预约已提交，客服经理会尽快与您联系');
              }  else {
                $this->ctr->assign('msg','提交失败');
              }
          }else{
              $this->ctr->assign('msg','输入错误，请检查');
          }
        }
     $this->ctr->DisplaySmart('/Wechat/Reserve.html');
    }




}
