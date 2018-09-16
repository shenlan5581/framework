<?php
    return array(
    //所需要的自定义扩展组件  此配会加载extend 中的相应文件
    'extends' =>  array(
            //文件夹            文件
            'controller' => 'controller',    //控制器基本组件
            'db'         => 'mysql',         //数据库
            'model'      => 'BaseModel',     //必要的模型基类
            'session'    => 'session',       //session
            'tools'      => 'tools',         //常见公共函数
            'file'       => 'file',          //文件相关操作
            'page'       => 'page',          //常用功能代码整合
            'client'     => 'client',      //常用功能代码整合
            'wechat'     => 'wechat',      //常用功能代码整合
            'log'        => 'log',      //常用功能代码整合
            ),
    //数据库 
    'db'=>  array(
        'default'=>array(
                'host'=>'127.0.0.1',
                'user'=>'root',
                'pass'=>'xingke',
                'dbname'=>'framework',
                'port'=>'3306',
                'tablepre'=>'fw_', //表前缀
            )
    ),
);