<?php 

//menu
define('DIR_ROOT', __DIR__);
define('DIR_APP',DIR_ROOT.'/app//');
define('DIR_PUB',DIR_ROOT.'/public//');
define('DIR_CTR',DIR_ROOT.'/mvc/ctr/');
define('DIR_MODEL',DIR_ROOT.'/mvc/model/');
define('DIR_VIEW',DIR_ROOT.'/mvc/view/');
define('DIR_EXTENDS',DIR_ROOT.'/extend//');
//load file
include DIR_APP."app.php";
include DIR_PUB."smarty/libs/Smarty.class.php";
include "config.php";
//default set about url route
define('DEF_MODULE'    ,'admin');
define('DEF_CONTROLLER','index');
define('DEF_ACTION'    ,'index');
define('DEF_CLASS_PREFIX','App_Ctr_');

