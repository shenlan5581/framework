<?php 
include_once "Base.php";
class App_Controller_Manage_Case extends Base_Manage{
//  案例 


    public function CaseListAction(){
      $model = new App_model_Manage_Case;
      $list = $model->List();
      $this->ctr->assign('list',$list);
      $this->ctr->DisplaySmart('/Manage/Case/caselist.html');
    }


    public function CaseAddAction(){
      $content=null;
      $model = new App_model_Manage_Case;
    if(isset($_POST["html"])){
      $content = $_POST["html"];
      $set=array(
        'c_title'=>'test',
        'c_url'=>'test',
        'c_articel'=>$content,
        'c_date'=>time(),
      );
      $model->AddCase($set);
    } else{
    }
   }



}