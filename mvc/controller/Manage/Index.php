<?php
use function TOOLS\GetProjectInfo;
/*  后台管理

后台管理 的页面进行了分离 layout 文件中为页面公共部分 其他则分离在单独页面中
                  如 admin 中的 登陆 及 注册  为单独的 html 页面
base 类为 该模块的 父类处理些 模块初始化操作 如 用户信息获取 登陆判断 等... ...
*/
// 后台基类 判断登陆及记录用户信息 管理页面布局

class Manage_Base{
      public $USER;  
      public $project ;
      public $ctr ;
      public $data;
      public function __construct(){
             $ID = Session::GetUserID();
             if($ID !== false){
                  header('Location:/Manage/Admin/Login');
             }else{
                  $this->ctr =new Controller();
                  $model = new App_Model_Manage_Admin;

                  $this->USER = $model->GetAdminInfoByID($ID);
                  $project = TOOLS\GetProjectInfo();
                  $this->ctr->assign('project',$project);
                  $this->ctr->assign('user',$this->USER);
                  $this->ctr->DisplaySmart('/Manage/layout/head.html');
                  $this->ctr->displaysmart('/Manage/layout/menu.html');
             }
      }
      public function __destruct(){
           $this->ctr->DisplaySmart('/Manage/layout/foot.html');
      }
}

class App_Controller_Manage_Index extends Manage_Base {
    public function __construct(){
          parent::__construct();
    }
    //首页
    public function IndexAction(){
        
     $this->ctr->assign('data',$this->data);
     $this->ctr->DisplaySmart('/Manage/index/home.html');
    }

    public function HomeAction(){

       //   $this->ctr->DisplaySmart('/Manage/Index/menu.html');
    }
    public function LogoutAction(){
       Session::DestoyUser();
       echo "退出";
    }








}
