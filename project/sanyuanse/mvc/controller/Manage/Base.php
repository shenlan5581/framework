<?php
use function TOOLS\GetProjectInfo;
/*  后台管理

后台管理 的页面进行了分离 layout 文件中为页面公共部分 其他则分离在单独页面中
                  如 admin 中的 登陆 及 注册  为单独的 html 页面
base 类为 该模块的 父类处理些 模块初始化操作 如 用户信息获取 登陆判断 等... ...
核心库 生成
一切使用路径的地方 需要重设
*/

class Base_Manage{
    public $USER;  
    public $project ;
    public $ctr ;
    public $data;
    public function __construct(){
    $this->ctr =new Controller;
    $ID = Session::GetAdminID();
    if($ID === false){
         $this->ctr->Location("/Manage/Sign/Login");
    }else{
         $this->ctr =new Controller();
         $model = new App_Model_Manage_Sign;
         $this->USER = $model->GetAdminInfoByID($ID);
         $project = TOOLS\GetProjectInfo();
         $this->ctr->assign('project',$project);
         $this->ctr->assign('user',$this->USER);
         $this->ctr->DisplaySmart('/Manage/view-layout/head.html');
         $this->ctr->assign('menu',$this->BASE_MENU());
         $this->ctr->assign('home','/'.PROJECT_NAME."/Manage");
         $this->ctr->displaysmart('/Manage/view-layout/menu.html');
    }
}
  public function __destruct(){
      $this->ctr->DisplaySmart('/Manage/view-layout/foot.html');
  }
  //目录设定
  public function BASE_MENU(){
    $project = PROJECT_NAME;
    return array(
        /*
        '图片管理'=>array(
             '幻灯片'=>"/$project/Manage/Slide/Slide",
        ),
        '工程案例'=>array(
             '案例'=>"/$project/Manage/Case/CaseList",
        ),
        */
        '用户'=>array(
             '会员列表'=>"/$project/Manage/Member/MemberList",
        ),
        '预约'=>array(
             '预约'=>"/$project/Manage/Reserve/ReserveList",
        ),
        '项目'=>array(
             '项目列表'=>"/$project/Manage/Order/OrderList",
        ),
        /*
        '微信'=>array(
             '消息'=>"/$project/Manage/Wechat/Message",
             '菜单'=>"/$project/Manage/Wechat/Menu",
             '素材'=>"/$project/Manage/Wechat/Material",
        ),
        */
    );
  }




}

