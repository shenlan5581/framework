<?php
/*  
* app 作为应用实例处理一些必要流程 如请求分发 文件载入
*
*/
 
 class App {
    /*
    *  加载指定扩展组件
    *  创建日志对象
    *  分发
    */ 
    public function Run(){
        //session
        session_start();
        //分发
       
        $this->Distribute(); 
    }
 
/* private */
/*
 1获取uri 2加载指定模块文件 3实例化对象 4调用
*/
    private function Distribute(){
        $query  =$this-> parse_uri();  
        //请求的模块  if module?module:def  
        $project = isset($project) && $project ? $project : (empty($query) ? DEF_PROJECT: trim(array_shift($query)));
        $module = isset($module) && $module ? $module : (empty($query) ? DEF_MODULE : trim(array_shift($query)));
        $controller = empty($query) ? DEF_CONTROLLER : trim(array_shift($query));
        $action = empty($query) ? DEF_ACTION : trim(array_shift($query));
        while(!empty($query)) {
            $key = array_shift($query);
            $key = trim($key) ? trim($key) : 'unknown';
            $val = array_shift($query);
            $val = trim($val) ? trim($val) : '';
            $_REQUEST[$key] = $val;
        } 
#在此加载项目 配置 及相应文件 (注意部分宏是写在项目的define 文件中）
        //加载项目配置

        @require_once DIR_ROOT."/project/$project/define.php";
        $config = include PROJECT_CONFIG;
        //组件加载    
        $this->LoadExtends($config['extends']);        
        //模型文件加载
        $this->LoadFromDir(PROJECT_MODEL); 
        //日志
        $GLOBALS['log'] = new Log(LOG_FILE);
        //DB 初始化DB
         DB::init($config['db']['default']);
        // 屏蔽错误
        if(RUNLEVEL === 'RELEASE'){
            error_reporting(0);
        }
#在此加载 控制器 调用
        //加载控制器文件           ctr/module/file_name
        @include_once PROJECT_CTR.$module.'/'.$controller.'.php';    
        //定义 类前缀后缀          (实例化的类名)Ctr_module_class 
        $controller =DEF_CLASS_PREFIX.ucfirst(strtolower($module)).'_'.ucfirst(strtolower($controller));
        $action = strtolower($action).'Action';
        //分发逻辑控制
        $flag = false;
        if (class_exists($controller)) {
            $ctClass = new $controller();
            if (method_exists($ctClass, $action)) {
                $flag = true;
                $ctClass->$action();
            }
        }
        if (!$flag) {
            header('Location:/Error'); //未找到控制器
        }
    } 
    private function parse_uri(){
        $uri = $_SERVER['REQUEST_URI']; //server variabal
        $pattern    = '/^\/+([a-zA-Z0-9\/]+)(\?|&)?.*/i';
        $query      = array();
        if (preg_match($pattern, $uri, $match)) {
            $rep_pat = '/\/+/';
            $rep_str = '/';
            $tmp = $match[1];
            $tmp = trim($tmp, '/');//去除两端无用的'/'
            $tmp = preg_replace($rep_pat, $rep_str, $tmp);//替换多余的'/'
            $query = explode('/', $tmp);
        }
        return $query;
    }
    /*
    *    加载扩展组件相应文件
    */
    private function LoadExtends($extends){
       foreach($extends as $k => $v){
          $file = DIR_EXTENDS.$k.'/'.$v.'.php';
          include_once($file);
       }
    }
    /*
    * 加载文件夹下所有文件
    */
    private function LoadFromDir($path) {
        $dir = opendir($path);
        if(!$dir){
            return false;
        } 
    while(($filename = readdir($dir)) !== false) {
        if($filename == '.' || $filename == '..'){
            continue;
        }
        $file = $path.'/'.$filename;//当前文件路径
        $type = @filetype($file); //类型
        if($type == 'dir'){
            $this->LoadFromDir($file);
        }else{
          include_once $file;  
        }
    }
    closedir($dir);
    }
} //class end
