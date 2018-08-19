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
}