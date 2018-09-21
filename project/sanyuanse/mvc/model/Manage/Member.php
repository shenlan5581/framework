<?php 

class App_Model_Manage_Member{
    public $mysql;
    public function __construct(){
        $this->mysql = new Mysql('member');
    }


    public function List($index,$count){
        $ctr = new Controller;
        $nk_name = $ctr->GetParam('nk_name',"GET");    
        $id = $ctr->GetParam('id',"GET");    
        $where =array(
            array('name'=>'m_del','oper'=>'=','value'=>0)
          );
        if($nk_name){
          $where [] = array('name'=>'m_nickname','oper'=>'like','value'=>'%'.$nk_name.'%');
        }
        if($id){
          $where [] = array('name'=>'m_id','oper'=>'=','value'=>$id);
        }
          $sort = array('m_date'=>'desc');
          return $this->mysql->getList($where,$index,$count,$sort);
    }
    public function Count(){
        $where =array(
          array('name'=>'m_del','oper'=>'=','value'=>0)
        );
        $sort = array('m_date'=>'desc');
        return $this->mysql->getCount($where);
       }

public function Del($id){
    $set =array(
      'm_del'=>1,
    );
    $where =array(
      array('name'=>'m_id','oper'=>'=','value'=>$id)
    );
       return $this->mysql->updateValue($set,$where);
    }

}