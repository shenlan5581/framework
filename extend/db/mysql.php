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
//数据库操作层扩展 api
/*
DB_Base:
     getRow($where);
     getList($where = array(), $index = 0, $count = 20, $sort = array(), $field = array()) {
     k add 联合查询
     @pararm $more_table (最后一个参数是联合表数据结构）
           结构说明: $union_table=array(    ps;其中主表key是在实例化mysql时的表
                              1 join 表名  主表key       从表 key
                        array('test1', 'admin.a_id', 'test1.t_a_id'),
                        array('eest2', 'test1.t_id', 'eest2.e_t_id'), 
                    );
     getListUnion($where = array(), $index = 0, $count = 20, $sort = array(), $field = array()，$more_table) {
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