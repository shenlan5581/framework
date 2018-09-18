<?php 
/*
*  定义宏
*  加载文件
*/
//directory
define('DIR_ROOT', __DIR__);
define('DIR_APP',DIR_ROOT.'/app//');
define('DIR_EXTENDS',DIR_ROOT.'/extend//');

define('TEMPLATE_DIR',DIR_ROOT.'/source/template/');
/*
//load file
include "config.php";
include DIR_APP."app.php";
include DIR_ROOT."/log/log.php";
include DIR_PUB."smarty/libs/Smarty.class.php";
*/
include DIR_APP."app.php";

//default set about url route
define('DEF_PROJECT'   ,'frame');
define('DEF_MODULE'    ,'Index');
define('DEF_CONTROLLER','Index');
define('DEF_ACTION'    ,'Index');
define('DEF_CLASS_PREFIX','App_Controller_');
define('DEF_CLASS_PREFIX','App_Model_');


// 定义的是 微信公众号开发需要获取的access_key 应用在后台登陆时  将返回的key 保存在 session['Wechat'] 中 以便后续微信后台的操作
define('WECHATURL',false);
