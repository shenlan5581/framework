<?php
//weixin公众号
include_once "WxBase.php";
class App_Controller_Wechat_Case extends WxBase{
   public function __construct(){
     parent ::__construct();
   }

   // 案例
   public function IndexAction(){
     $model=new App_Model_Wechat_wechat;
     $list =$model->Case($this->user['m_openid']);
     foreach($list as $k => &$val){
      $val['c_article'] = htmlspecialchars_decode($val['c_article']); 
      $val['c_date'] =date("Y-m-d H:i:s", $val['c_date']); 
      $val['c_type'] =$this->Case_Type($val['c_type']); 
      $val['c_style'] =$this->Case_Style($val['c_style']); 
   }
     
     $this->ctr->assign('case',$list);
	   $this->ctr->DisplaySmart('/Wechat/case.html');
   }

/* 
返回整个数组或者 某个值
*/
private function Case_Type($nb=false){
  $type =array(
    '1'=>'家装',
    '2'=>'酒店',
    '3'=>'服饰',
    '4'=>'餐饮',
    '5'=>'教育',
    '6'=>'医疗',
    '7'=>'会所',
  );
  if($nb){
     return $type[$nb];
  } else {
     return $type;
  }
 }
 private function Case_Style($nb=false){
 $style=array(
    '1'=>'欧式',
    '2'=>'美式',
    '3'=>'中式',
    '4'=>'田园',
    '5'=>'混搭',
    '6'=>'东南亚',
    '7'=>'现代',
  );
  if($nb){
   return $style[$nb];
} else {
   return $style;
}
}
}