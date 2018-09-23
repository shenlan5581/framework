<?php
/*
模型配置文件
业务配置

   
*/
class App_Model_Index_Index extends Model{

    public function __construct(){
           parent::__construct($this->Operate);
    }
    public $Operate = array(  // 数据结构
        'table'=>'transaction', //主操作表
        //列表及需求数据
        'List' => array(
            //联表查询如果没有 false 如果有调用连表查询
            'Uniontable'=> array(
                array('project','tr_id','pro_id'),
            ),
            // 参数请求如排序,分页，索引
            'request'=>array(
                        //参数获取方法
                        'method'=>"GET",
                        //参数表  name=>type
                        'param' => array(
                            'id'=>'int',
                            'index'=>'int'
                        ),
                ),
            //查询条件     value的值此时为参数中的字段
            'where'=>array(
            ),
            //数据输出
            'field'=>null,
            //排序
            'sort'=>null,
            //默认页数
            'count'=>null,
        ),











        
    );




}