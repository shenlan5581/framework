<?php

include_once DIR_ROOT."/extend/db/lib/Base.php";
include_once DIR_ROOT."/extend/db/lib/DB.php";
include_once DIR_ROOT."/extend/db/lib/Mysql_Driver.php";

/*
*  数据库表模型
*/
class Mysql extends DB_Base{
    /*  初始化 DB
    *   如果 dbname 未设置 使用默认配置
    *   如果 指定 dbname 则使用指定的库
    *   兼顾小程序多用户
    *   使用时 指定库名
    */
    //1 表名
    public function __construct($table){ 
        $this->_table=$table;
    }
//数据库操作层扩展
/*
DB_Base:
     getRow($where);
     getList($where = array(), $index = 0, $count = 20, $sort = array(), $field = array()) {
     getCount($where = array()) 
     insertValue(array $data) 

     updateValue($set, $where)
     deleteValue($where) 
     getRowById($id){
     updateById($set,$id)
     deleteById($id)
*/

}//class end

//初始化数据库