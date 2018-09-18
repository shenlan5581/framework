<?php 
/*
*  定义宏 只限项目使用
*  加载文件
*/
//directory
// 主机名
define('LOCALNAME','http://framework.cn'); //重要返回部分路径
//项目名(文件名）
define('PROJECT_NAME','frame');//同文件夹名（重要 涉及页面跳转拼接变量）
define('PROJECT_MD','
 项目说明
');
//根目录
define('PROJECT_ROOT', __DIR__);
//mvc文件夹
define('PROJECT_CTR',PROJECT_ROOT.'/mvc/controller/');
define('PROJECT_MODEL',PROJECT_ROOT.'/mvc/model/');
define('PROJECT_VIEW',PROJECT_ROOT.'/mvc/view/');
// smarty 加载的前端文件夹
define('VIEW_DIR',PROJECT_VIEW);
//资源路径
define('SOURCE',PROJECT_ROOT.'/sources/');
//日志文件
define('LOG_FILE',PROJECT_ROOT.'/log/log');
//缓存
define('PROJECT_SMARTCACHE',PROJECT_ROOT.'/templates_c');
//配置
define('PROJECT_CONFIG',PROJECT_ROOT.'/config.php');

//上传路径  crop 和 kindedit
define('EDIT_UPLOAD',DIR_ROOT.'/sources/'.PROJECT_NAME.'/upload/kind');
define('CROP_UPLOAD',DIR_ROOT.'/sources/'.PROJECT_NAME.'/upload/crop');

define('RUNLEVEL','DEBUG');//运行级别 错误是否显示
#RELEASE
