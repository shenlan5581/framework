<?php 
class App_Model_Manage_Case{
    private $mysql;
    public function __construct(){
        $this->mysql = new Mysql('case');
    }

 public function List($index,$count,$type,$style){
        $where =array(
          array('name'=>'c_del','oper'=>'=','value'=>0)
        );
        if($type){
         $where[]= array('name'=>'c_type','oper'=>'=','value'=>$type);
        }
        if($style){
         $where[]= array('name'=>'c_style','oper'=>'=','value'=>$style);
        }
        $sort = array('c_date'=>'desc');
        return $this->mysql->getList($where,$index,$count,$sort);
       }

 public function Count($type,$style){
        $where =array(
          array('name'=>'c_del','oper'=>'=','value'=>0)
        );
        if($type){
         $where[]= array('name'=>'c_type','oper'=>'=','value'=>$type);
        }
        if($style){
         $where[]= array('name'=>'c_style','oper'=>'=','value'=>$style);
        }
        $sort = array('c_date'=>'desc');
        return $this->mysql->getCount($where);
       }
 public function AddCase($set){
       return $this->mysql->insertValue($set);
    }
    

 public function GetRow($id){
        $where =array(
          array('name'=>'c_id','oper'=>'=','value'=>$id)
        );
       return $this->mysql->getRow($where);
    }
    

}