<?php
class App_Model_Manage_Admin{
    private $TableName = 'admin';
    public function Login($param){
        $mysql = new Mysql($this->TableName);
        $condition = array(
          array('name'=>'a_user','oper'=>'=','value'=>$param['admin']),
        );
        return $mysql->getRow($condition); 
    }
    public function GetAdminInfoByID($id){
        $mysql = new Mysql($this->TableName);
        $condition = array(
          array('name'=>'a_id','oper'=>'=','value'=>$id),
        );
        return $mysql->getRow($condition); 
    }
}