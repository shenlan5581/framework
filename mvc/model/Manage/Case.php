<?php 
class App_Model_Manage_Case{
    private $mysql;
    public function __construct(){
        $this->mysql = new Mysql('case');
    }


    public function AddCase($set){
    return $this->mysql->insertValue($set);
    }
    public function List(){
        $where =array(
          array('name'=>'c_del','oper'=>'=','value'=>0)
        );
    return $this->mysql->getList($where);
    }
}