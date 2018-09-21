<?php
include_once "Base.php";
class App_Controller_Manage_Reserve extends Base_Manage{
    public $model;
    public function __construct() {
        parent::__construct();
    $this->model =new App_Model_Manage_Reserve;    

        }


    //预约列表
    public function ReserveListAction(){ 
        $model = new App_model_Manage_Reserve;
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
           $val['re_date'] =date("Y-m-d H:i:s", $val['re_date']); 
        }
        //输出     
        $this->ctr->assign('count',$count); 
        $this->ctr->assign('curr_count',$index?$index:1);
        $this->ctr->assign('list',$list);
        $this->ctr->assign('url','/'.PROJECT_NAME.'/Manage/Reserve/ReserveList');
        $this->ctr->DisplaySmart('/Manage/Reserve/list.html');
      }
   
  
      public function ReserveDeleteAction(){
        if($this->USER['a_level']<3){
          $this->ctr->MessageLocation('您的帐号无权操作','/'.PROJECT_NAME.'Manage','3秒后跳转',200);
          die();
         }
            $model = new App_Model_Manage_Reserve;
            $id = $this->ctr->GetParam('id');
            if($id){
              $ret=$model->Del($id); 
            }
            if($ret){
              $this->ctr->MessageLocation('操作成功','/'.PROJECT_NAME.'/Manage/Reserve/ReserveList','3秒后跳转',200);
              die();
            }else{
              $this->ctr->Message('操作失败','请联系管理员');
            }
      }
      



}