<?php
/*  全局公共函数库
*
*/
namespace TOOLS{
    /*
    *  重新设定 DB 可以在控制器中调用 重新初始化 DB
    *  (也许能针对小程序多库的方案）
    */
  function SetDB($dbname){
        global $config;
        $conf = $config['db']['default'];
        if($dbname){
        $conf['dbname'] = $dbname;
        }
        \DB::init($conf); #使用全局命名空间
  }


  function Salt_Password($pass) {
    return md5('@&!#plum'.md5($pass).'plum$^%*');
}

function Check_pass_len($pass) {
  $length = strlen($pass);
  if ($length < 6 || $length > 20) {
      return false;
  }
  return true;
}
function Check_name_len($pass) {
  $length = strlen($pass);
  if ($length < 6 || $length > 20) {
      return false;
  }
  return true;
}
function GetProjectInfo() {
    $model = new \Mysql('project');
    $where =array(
      array('name'=>'pro_id','oper'=> '=' ,'value'=>1),
    );
    return $model->getRow($where);
}













}