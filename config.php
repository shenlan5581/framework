<?php
    $config = array(
    //所需要的自定义扩展组件  此配会加载extend 中的相应文件
    'extends' =>  array(
            //文件夹            文件
            'controller' => 'controller',    //控制器基本组件
            'db'         => 'mysql',         //数据库
            'model'      => 'BaseModel',     //必要的模型基类
            'tools'      => 'tools',         //常见公共函数
            ),
     //日志
    'log' =>  array(
            'file' =>DIR_ROOT.'/log/log',
           // 'level' => 'debug',         // 日志级别 1err 2warn 3msg 4debug
        
        ),
    //数据库 
    'db'=>  array(
        'default'=>array(
                'host'=>'127.0.0.1',
                'user'=>'root',
                'pass'=>'xingke',
                'dbname'=>'yunzhe',
                'port'=>'3306',
                'tablepre'=>'pre_', //表前缀
            )
    ),

    // 资源上传目录
    'sources'=>  array(
            //图片上传路径  公共方法
            'UploadImagePath' => DIR_ROOT.'/sources/UploadImage'
    ),
);

 
