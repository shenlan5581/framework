<?php
include_once "Base.php";
class App_Controller_Manage_System extends Base_Manage{
      // 清除缓存 
    public function CleanCacheAction(){
      $file = new FILE;
      $this->ctr->CleanCache();
      $ret = $file->delete(PROJECT_SMARTCACHE);
      if($ret){
      $this->ctr->Message('清除成功','已清除缓存');
      } else {
      $this->ctr->Message('清除失败','请联系管理员');
      }

   }

    public function LogAction(){
      $log=file(LOG_FILE);
      $log =array_reverse($log);
      if($log){
      $this->ctr->assign('log',$log);
      $this->ctr->DisplaySmart('/Manage/system/log.html');
      } else {
      $this->ctr->Message('日志读取失败','请联系管理员');
      }

   }
    public function CleanLogAction(){
      $log= LOG_FILE;
      if(unlink($log)){
      $this->ctr->Message('日志已清空','请联系管理员');
      } else {
      $this->ctr->Message('失败','请联系管理员');
      }

   }
}