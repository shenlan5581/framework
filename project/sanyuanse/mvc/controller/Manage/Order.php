<?php
include_once "Base.php";
class App_Controller_Manage_Order extends Base_Manage{
    public $model;
    public function __construct() {
        parent::__construct();
        $this->ctr->DisplaySmart('/Manage/order/menu.html');
        $this->model =new App_Model_Manage_Order;    

    }
    public function OrderListAction() {
        $index = $this->ctr->GetParam('index');    
        // 默认值
        $index=$index?$index:1;
        // 分页
        $index?$index:1;
        $items=10;
        $count= $this->model->Count();
        $count =  ceil ($count/$items); //总页
        $list = $this->model->List(($index-1)*$items,$items);
        //信息转换
        foreach($list as $k => &$val){
        $val['o_date'] =date("Y-m-d H:i:s", $val['o_date']); 
        }
        //输出     
        $this->ctr->assign('count',$count); 
        $this->ctr->assign('curr_count',$index?$index:1);
        $this->ctr->assign('list',$list);
        $this->ctr->assign('url','/'.PROJECT_NAME.'/Manage/Order/OrderList');
        $this->ctr->DisplaySmart('/Manage/order/list.html');
    }

    public function OrderEditAction(){
        if($this->USER['a_level']<2){
         $this->ctr->MessageLocation('您的帐号无权操作','/Manage','3秒后跳转');
         die();
        }
        $edit_id = $this->ctr->GetParam('edit_id');
        $user_id  = $this->ctr->GetParam('user_id');

        $model = new App_model_Manage_Order;
        if(isset($_POST['oper'])){ //edit_commit


            $title= $this->ctr->GetParam('title','POST');    
            $addr= $this->ctr->GetParam('addr','POST');    
            $biref= $this->ctr->GetParam('biref','POST');    
            $recommend= $this->ctr->GetParam('recommend','POST');    
            $admin= $this->ctr->GetParam('admin','POST');    
            $price= $this->ctr->GetParam('price','POST');    
            $pay= $this->ctr->GetParam('pay','POST');    
     
            if($title&&$biref&&$price&&$pay&&$admin&&$addr) {
                $set=array(
                  'o_title'=>$title,
                  'o_addr'=>$addr,
                  'o_recommend'=>$recommend?$recommend:'',
                  'o_admin'=>$admin,
                  'o_price'=>$price,
                  'o_pay'=>$pay,
                  'o_biref'=>$biref,
                );
                if($edit_id){ //编辑提交
                    $ret = $model->UpdateOrder($edit_id,$set);
                } else if($user_id){ //创建 
                    $set['o_date'] = time();
                    $set['o_m_id'] = $user_id;
                    $ret = $model->AddOrder($set);
                }
                if($ret){
                    $this->ctr->MessageLocation('操作成功','/'.PROJECT_NAME.'/Manage/Order/OrderList','3秒后跳转',0);
                    die();
                }else {
                    $this->ctr->Message('操作失败','请检查输入');
                }
            } else {
                    $this->ctr->Message('请检查输入');
            }
        }else{ //no commit
            if($edit_id){
                $row = $model->GetRow($edit_id);
                $this->ctr->assign('row',$row);
            }
        }


            $this->ctr->assign('edit_id',$edit_id?$edit_id:null); 
            $this->ctr->assign('user_id',$user_id?$user_id:null); 
            $this->ctr->DisplaySmart('/Manage/order/edit.html');
  }
  







}