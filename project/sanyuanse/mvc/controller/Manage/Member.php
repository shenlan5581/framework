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
     $model = new App_model_Manage_Member;
     $index = $this->ctr->GetParam('index');    
     // 默认值
     $index=$index?$index:1;

     // 分页
     $index?$index:1;
     $items=10;
     $count= $model->Count();
     $count =  ceil ($count/$items); //总页
     $list = $model->List(($index-1)*$items,$items);
     //信息转换
     foreach($list as $k => &$val){
        $val['m_date'] =date("Y-m-d H:i:s", $val['m_date']); 
     }
     //输出     
     $this->ctr->assign('count',$count); 
     $this->ctr->assign('curr_count',$index?$index:1);
     $this->ctr->assign('list',$list);
     $this->ctr->assign('url','/'.PROJECT_NAME.'/Manage/Member/MemberList');
     $this->ctr->DisplaySmart('/Manage/member/list.html');
   }



   public function MemberDeleteAction(){
    if($this->USER['a_level']<3){
      $this->ctr->MessageLocation('您的帐号无权操作','/'.PROJECT_NAME.'Manage','3秒后跳转',200);
      die();
     }
        $model = new App_Model_Manage_Member;
        $id = $this->ctr->GetParam('id');
        if($id){
          $ret=$model->Del($id); 
        }
        if($ret){
          $this->ctr->MessageLocation('操作成功','/'.PROJECT_NAME.'/Manage/Member/MemberList','3秒后跳转',200);
          die();
        }else{
          $this->ctr->Message('操作失败','请联系管理员');
        }
  }
  



  
}