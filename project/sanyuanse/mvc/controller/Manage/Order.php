<?php
include_once "Base.php";
/*    
后台业务管理
创建业务模型文件
*/
class App_Controller_Manage_Order extends Base_Manage{
    public function __construct() {
        parent::__construct();
        }

    //会员列表
   public function OrderListAction(){ 
     $List=$model->List();
     
      
   }

  
}