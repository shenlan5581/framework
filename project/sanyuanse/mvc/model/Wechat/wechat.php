<?php 

class App_Model_Wechat_wechat{

    public function GetUserInfo($openid){
        if($openid){
            $mysql =new Mysql('member');
            $where = array(
                array('name'=>'m_del','oper'=>'=','value'=>0),
                array('name'=>'m_openid','oper'=>'=','value'=>$openid),
            );
            return $ret =$mysql->getRow($where);
        } else{
          return false;
        }
    }

    public function Regesiter($data){
            $mysql =new Mysql('member');
        if($data){
            return $ret =$mysql->insertValue($data);
        } else{
          return false;
        }
    }

    public function Sign($openid,$integral){
          $mysql =new Mysql('member');
            $where = array(
                array('name'=>'m_del','oper'=>'=','value'=>0),
                array('name'=>'m_openid','oper'=>'=','value'=>$openid),
            );
            $set =array(
              'm_integral'=>$integral+1,
              'm_sign'=>time(),
            );
            return $ret =$mysql->updateValue($set,$where);

    }





}