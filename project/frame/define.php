<?php 
/*
*  定义宏 只限项目使用
*  加载文件
*/
//directory
// 主机名
define('LOCALNAME','https://xingke.store');
//项目名(文件名）
define('PROJECT_NAME','framework');
define('PROJECT_MD','
 项目说明
');
//根目录
define('PROJECT_ROOT', __DIR__);
//mvc文件夹
define('PROJECT_CTR',PROJECT_ROOT.'/mvc/controller/');
define('PROJECT_MODEL',PROJECT_ROOT.'/mvc/model/');
define('PROJECT_VIEW',PROJECT_ROOT.'/mvc/view/');

//资源路径
define('SOURCE',PROJECT_ROOT.'/sources/');
//文件上传路径
define('UploadImagePath',PROJECT_ROOT.'/sources/UploadImage');


//日志文件
define('LOG_FILE',PROJECT_ROOT.'/log/log');

define('RUNLEVEL','DEBUG');//运行级别 错误是否显示
#RELEASE

define('PROJECT_CONFIG',PROJECT_ROOT.'/config.php');

//load file
require_once PROJECT_ROOT."/config.php";
