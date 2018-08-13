<?php
namespace APP{
 class App {
    private $CTRL;
    public function Run($config){
        $this->LoadFile($config['extends']); 

       //日志
        $this->Distribute(); 
    }
 

/* private */
/*
 1获取uri 2加载指定模块文件 3实例化对象 4调用
*/
    private function Distribute(){
        global $base_url;
        $query  =$this-> parse_uri();  
        //请求的模块  if module?module:def  
        $module = isset($module) && $module ? $module : (empty($query) ? DEF_MODULE : trim(array_shift($query)));
        //设置基URL
        $base_url = isset($_SERVER['PHP_SELF']) && trim($_SERVER['PHP_SELF'], '/') != 'index.php' ? '/' : '/' . $module . '/';
        $controller = empty($query) ? DEF_CONTROLLER : trim(array_shift($query));
        $action = empty($query) ? DEF_ACTION : trim(array_shift($query));
        while(!empty($query)) {
            $key = array_shift($query);
            $key = trim($key) ? trim($key) : 'unknown';
            $val = array_shift($query);
            $val = trim($val) ? trim($val) : '';
            $_REQUEST[$key] = $val;
        } 
        //加载控制器文件           ctr/module/file_name
        @include_once DIR_CTR.$module.'/'.$controller.'.php';    
        //定义 类前缀后缀          (实例化的类名)Ctr_module_class 
        $controller =DEF_CLASS_PREFIX.ucfirst(strtolower($module)).'_'.ucfirst(strtolower($controller));
        echo $controller;
        $action = strtolower($action).'Action';
        echo $action;
        //分发逻辑控制
        $flag = false;
        if (class_exists($controller)) {
            $ctClass = new $controller();
            if (method_exists($ctClass, $action)) {
                $flag = true;
                $obj=1;
                $ctClass->$action($obj);
            }
        }
        if (!$flag) {
            echo "方法或类未找到";
        #   header('Location:/error'); //未找到控制器
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
    private function LoadFile($extends){
       foreach($extends as $k => $v){
          $file = DIR_EXTENDS.$k.'/'.$v.'.php';
          include_once($file);
       }
    }


} //class end
}//namespace end
