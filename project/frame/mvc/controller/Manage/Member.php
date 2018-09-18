<?php
include_once "Base.php";
/*    
后台业务管理
创建业务模型文件
*/
class App_Controller_Manage_Member extends Base_Manage{
    public $token;
    public function __construct() {
        parent::__construct();
        $this->ctr->DisplaySmart('/Manage/member/menu.html');
        }

    //会员列表
   public function MemberListAction(){ 
     $model = new App_Model_Manage_WxMember;
     $List=$model->List();
     $this->ctr->DisplaySmart('/Manage/member/list.html');
   }

  
}