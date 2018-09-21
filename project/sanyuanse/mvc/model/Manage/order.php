<?php 

class App_Model_Manage_Order{
    public $mysql;
    public function __construct(){
        $this->mysql = new Mysql('order');
    }
    
    public function List($index,$count){
        $ctr = new Controller;
        $otitle= $ctr->GetParam('otitle',"GET");    
        $u_id= $ctr->GetParam('user_id',"GET");    
        $where =array(
            array('name'=>'o_del','oper'=>'=','value'=>0)
          );
          if($otitle){
            $where [] = array('name'=>'o_title','oper'=>'like','value'=>'%'.$otitle.'%');
          }
          if($u_id){
            $where [] = array('name'=>'o_m_id','oper'=>'=','value'=>$u_id);
          }
          $sort = array('o_date'=>'desc');
          return $this->mysql->getList($where,$index,$count,$sort);
    }
    public function Count(){
        $where =array(
          array('name'=>'o_del','oper'=>'=','value'=>0)
        );
        $sort = array('o_date'=>'desc');
        return $this->mysql->getCount($where);
       }

public function Del($id){
    $set =array(
      'o_del'=>1,
    );
    $where =array(
      array('name'=>'o_id','oper'=>'=','value'=>$id)
    );
       return $this->mysql->updateValue($set,$where);
    }

    public function UpdateOrder($id,$set){
        $where =array(
          array('name'=>'o_id','oper'=>'=','value'=>$id)
        );
       return $this->mysql->updateValue($set,$where);
    }
    
    public function AddOrder($set){
        return $this->mysql->insertValue($set);
     }


    public function GetRow($id){
        $where =array(
          array('name'=>'o_id','oper'=>'=','value'=>$id)
        );
       return $this->mysql->getRow($where);
    }

}