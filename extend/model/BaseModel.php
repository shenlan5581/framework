<?php
/*
模型基类 
  思路：一个模型作为一个业务的实例对象
       统一定义数据接口,
  流程：
        model 数据结构定义业务所需数据 (创建模型对象时所必须)

        模型对象实例化以后 GetReqData（） 为控制器提供 数据获取清单
        InstanceMysql 将 Data 中的的 表 被实例化 Msql 对象
        handler() 函数作为公共函数处理具体业务逻辑 参数是数据 或者其他
        $Result 处理完成后的参数
数据结构:
      $this->Model = array(
*/

 
/*数据结构是否统一 （需求：输入  条件：业务 输出） 是否适应所有业务
    
*
*/
$info =array(                           //支持的业务
    'table'=>array('case','admin'),
    'field'=>array('',''),             //需求
    'condition'=>array(                //条件业务
     array(),
    ),
);
//输出

class Model{
    protected $ctr;         //前端控制器
    protected $mysql;
    protected $info;        //

    protected $Error;    //错误信息

    public function __construct($Operate){
      $this->ctr=new Controller; //控制器
      $this->mysql=new Mysql($Operate['table']); //控制器
      $this->info=$Operate; //保存子类数据
      $this->Error = false;    //错误信息
    }
    public function __destruct(){
       if($this->Error){
         // 写入错误到日志
         trigger_error("MODEL-errmsg=$this->Error", E_USER_ERROR);
       }
    }

    // 输出列表   参数为数组其他可能的参数
    public function List($Param=array()){
      //获取信息
      $info =$this->info['List'];
      if(!$info){
        return false;
      }
      //参数收集 
      $req =$this->ctr->GetParam($info['request']['param'],$info['request']['method']);
      //参数检测
      if(!$this->checkParam($req)){
        return false;
      }
      $params = $req;
      if($Param){
       $params =  array_merge($req,$Param);
      }
      //条件
      $where = $info['where'];
      if(!$this->makeWhere($params,$where)){
        return false;
      }
      //默认
      $index=(isset($params['index']))?$params['index']:1;
      $count=(isset($params['count']))?$params['count']:10;
      $curr_index=$index;
      $index=($index-1)*$count;
      $sort =$info['sort'] ?$info['sort']:null;
      $field=$info['field']?$info['field']:null;
      $count=$info['count']?$info['count']:10;
      if(is_array($info['Uniontable'])){  //联表
         $ret['curr_index'] =$curr_index;
         $ret['conuts']=$this->mysql->getCountUnion($where,$info['Uniontable']);
         $ret['list'] = $this->mysql->getListUnion($where,$index,$count,$sort,$field,$info['Uniontable']);
         return $ret;
      } else {
         $ret['curr_index'] =$curr_index;
         $ret['conuts']=$this->mysql->getCount($where);
         $ret['list'] = $this->mysql->getList($where,$index,$count,$sort,$field);
         return $ret;
      }
    }

 

    // 
    private function makeWhere($params,&$where){
        foreach($where as $k => &$v){
            if(isset($params[$v['value']])){
               $v['value'] = $params[$v['value']];
            } else {
               $this->Error="参数  ".$v['value']." 未正常找到(make Where)::";
               return false;
            }
        }
        return true;
    }
    //检查参数 
    private function checkParam($Param){
          foreach($Param as $k=>$v){
             if(!$v){
               $this->Error="参数".$k."未正常获取::";
               return false;
             }
          }
      return true;
    }
 }









































/*     ***** version 1.0  （note: 不可控因素太多 pause 2018.8.19:3:26) ****        
   
$this->Model = array(
      'order' => array(
          #前后数据映射
          'map'=>array(   
             'id'=>'ord_id',  #库 => 前台            
          ),
          #数据输入
          'in' => array(
             'id'=> null,
          ),
          #数据输出
          'out' => null,
          #条件列表
          'condition'=>array(
              array('name'=>'ord_id','oper'=>'=','value'=>null),
          ),
          #... ...  可设置多个条件
          #mysql 实例
          'mysql'=>null,
          #api 列表(调用）  1api 2 p1 3 p2 ..(参数）
          'api' =>" getRow(\$table['condition']);",
          #消息
          'error'=>'member req stage error'
      ),
      'member' => array(
          #前后数据映射
          'map'=>array(   
            'ord_m_id'=>'m_id'
          ),
          #数据输入
          'in' => array(
          ),
          #数据输出
          'out' => null,
          #条件列表
          'condition'=>array(
              array('name'=>'m_id','oper'=>'=','value'=>null),
          ),
          #... ...  可设置多个条件
          #mysql 实例
          'mysql'=>null,
          #api 列表(调用）  1api 2 p1 3 p2 ..(参数）
          'api' =>" getRow(\$table['condition']);",
          #消息
          'error'=>'member req stage error'
      ),
    );
  }

 
    protected function Auto($ctr){
       $out=array();
       foreach(($this->Model) as $tablename => &$val){ 
          $val['mysql']=new Mysql($tablename);    
          $out = $this->stage($val,$out,$ctr);
          if($out == -1){
             return false;
          } 
       }
       return true;
    }
    private function stage(&$table,$last,$ctr){
         //填充 in
         if($this->fill($table['in'],$table['condition'],$last,$ctr,$table['map'])){
           $api = $table['api'];
           $mysql = $table['mysql'];
           $api = "return \$mysql->$api";   #调用api
           $ret = eval($api);
           $table['out'] = $ret;
           if(empty($ret)){
           trigger_error("stage mysql query empty!");
           }
           return $ret;
         } else {
           $table['message'] = 'Data filling error';
           return  -1; #数据填充失败
         }
    }
    //1 需要填充的数据 2 控制器 3上次输出
    private function fill(&$arr,&$condition,$last,$ctr,$map){
        $ctr->GetParam($arr);  #获取前端参数
        foreach($arr as $k => &$v){
              if($v == null){
                 if(array_key_exists($k,$last)){
                   $arr[$k] = $last[$k];
                 } else {
                   return false;
                 }
              }
        }
        #转换
        $this->reverse($arr,$map);
        foreach($condition as $key => &$val){
            if($val['value'] == null){
              echo  $map[$val['name']].'hhhh';
                  $kk = $map[$val['name']];//外健转换
                  echo $kk.'lll55l';
                if(array_key_exists($kk,$last)){
                   $val['value']=$last[$val['name']];
                } else if(array_key_exists($val['name'],$arr)){
                   $val['value']=$arr[$val['name']];
                } else {
                   return false;
                }
            }
        }
      return true;
    }
    private function reverse(&$in,$map){
       $input = array();
       foreach($in as $k=>$v){
         $input[$map[$k]] =$v;
       }
       $in = $input;
    }


  }

*/