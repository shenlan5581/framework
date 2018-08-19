<?php
class App_Controller_Index_Index{
    public function indexAction(){
        $ctr =new Controller();    //使用控制器
        $model = new App_Model_Index_Index();
        //输入
        $result = $model->Handler($ctr);
        //输出
        $ctr->assign('size','88');
        $ctr->DisplaySmart("Index/index.html");
        
    }

    public function formtestAction(){
        $ctr = new Controller();
        $para = array(  //数据接口定义 
            'text'=>''
        ); 
        $ctr->GetParam($para);//填充
        print_r($para);
        echo "Input test ok";
        
    }
}
