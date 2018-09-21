<?php 

class App_Model_Manage_Reserve{
    public $mysql;
    public function __construct(){
        $this->mysql = new Mysql('reserve');
    }
    
    public function List($index,$count){
        $ctr = new Controller;

        $where =array(
            array('name'=>'re_del','oper'=>'=','value'=>0)
          );

          $sort = array('re_date'=>'desc');
          return $this->mysql->getList($where,$index,$count,$sort);
    }
    public function Count(){
        $where =array(
          array('name'=>'re_del','oper'=>'=','value'=>0)
        );
        $sort = array('re_date'=>'desc');
        return $this->mysql->getCount($where);
       }

public function Del($id){
    $set =array(
      're_del'=>1,
    );
    $where =array(
      array('name'=>'re_id','oper'=>'=','value'=>$id)
    );
       return $this->mysql->updateValue($set,$where);
    }

}