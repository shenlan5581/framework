<?php

use function TOOLS\Check_len;
use function TOOLS\GetProjectIndo;
/*
* admin 管理员 注册登陆相关
*/
class App_Controller_Manage_Admin{
    public function LoginAction(){
       if(Session::Islogin()){
          header('/Manage/Index/Home');
       }
       $ctr = new Controller;
       $param = array(
           'admin'=>'str',
           'pass' =>'str',
           'resubmitID' =>'int',
       );
          $user = $ctr->GetParam($param);
          // 参数完整 验证
          if($user['admin'] && $user['pass'] &&
              TOOLS\Check_pass_len($user['pass']) &&
              TOOLS\Check_name_len($user['admin'])
              ){
              $model= new App_Model_Manage_Admin;
              $ret = $model->Login($user);
              if($ret){ #查询成功
                if(TOOLS\Salt_Passwork($user['pass']) ===$ret['a_pass']){
                    Session::SetUser($ret['a_user'],$ret['a_id']);
                    //跳转至首页
                    header('/Manage');
                }else{
                  $message = "账户名密码不匹配";
                }
              } else {
                $message = "未找到账户信息";
              }
          } else { //无参数 显示登陆框
            $message = '请先登陆';
          } 
       $ctr->assign('message',$message);
       $ctr->DisplaySmart("/Manage/layout/head.html");
       $ctr->DisplaySmart('/Manage/Admin/login.html');
       $ctr->DisplaySmart("/Manage/layout/foot.html");
       return;
    }
    /* 注册 */
    public function RegisterAction(){
       if(Session::Islogin()){
          header('/Manage/Index/Home');
       }
       $ctr = new Controller;
       $param = array(
           'admin'=>'str',
           'pass' =>'str',
       );
       $user = $ctr->GetParam($param);
       $info = TOOLS\GetProjectIndo();
      
      








    
       $message = '用户注册';
       $output= array(
         'message'=>$message,
         'info'=>   $info,
       );
       $ctr->assign('data',$output);
       $ctr->DisplaySmart("/Manage/layout/head.html");
       $ctr->DisplaySmart('/Manage/Admin/register.html');
       $ctr->DisplaySmart("/Manage/layout/foot.html");
       return;
    }

}
