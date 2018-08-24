<?php
/* 控制器组建类  
*  职责：
*      获取前端数据输入
* 
*/ 
include_once DIR_ROOT.'/extend/controller/clean.php';
class Controller{  
 private $smart;
 public function __construct(){
   include_once DIR_ROOT.'/public/smarty/libs/Smarty.class.php';
   $this->smart = new Smarty();
 }

//以数组方式获取参数
//  GetParam('a','b');
 public function GetParam(&$param,$method='GET'){
    if(is_array($param)){        //数组获取
      foreach($param as $key =>&$value) {
        if($method =='GET'){
          $val = (isset($_GET[$key]))?$_GET[$key]:"";
          $type = $value.'val';
          $value = $type($this->Clean($val));
        } else if ($method =='POST'){
          $val = (isset($_POST[$key]))?$_POST[$key]:"";
          $type = $value.'val';
          $value = $type($this->Clean($val));
        }
      }
      return $param;
    } else {                    //单值获取
        if($method =='GET'){
          $val = (isset($_GET[$param]))?$_GET[$param]:"";
          return  $this->Clean($val);
        } else if ($method =='POST'){
          $val = (isset($_POST[$param]))?$_POST[$param]:"";
          return  $this->Clean($val);
        }
    }
}


 public function GetJson(){
    echo "none";
 }



 /************输出**********/
 /*
 *   输出 smart 数据
 */
 public function assign($key,$val){
   $this->smart->assign($key,$val);
 }
 /*
 *   输出 smart 页面
 */
 public function DisplaySmart($file){
   $file =DIR_VIEW.$file; 
   $this->smart->display($file);
 }
 /*
 *   输出json串 
 */
 public function DisplayJson($msg='',$data=array(),$status=true){
    $arr = array();
    $arr['msg'] =$msg ;
    $arr['data'] =$data ;
    $arr['status'] =$status ;
    $arr['ec']=200;
    echo json_encode($arr);       
 }





/* private ***************** 过滤*/
 //输入过滤 
 // 以下调用了不同的过滤（注意）
private function Clean($str){  
    #替换成实体字符
    $str=htmlspecialchars($str);
    #使用字符串替换‘<','>' 失效
    $str = $this->CleanBy_str_replace($str);
    #mysql 过滤
    #
    #Clean.php
    $str = CLEAN\cleanJsCss($str);
    $str = CLEAN\cleanYellow($str);
    return $str;
 }
/*  function by k
*   自写替换 可以临时用
*/
 private function CleanBy_str_replace($str){ #by self
   return  str_replace(
     array(
       'script',
       'yuxinji',
       'php'
     ),
     array( 
       '*',
       'YUINJI',
       '*'
     ),
   $str);
 }





}//class end


