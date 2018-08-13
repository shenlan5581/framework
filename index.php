<?php
/*
*   入口文件
*   进入分发逻辑
*/

namespace {
include_once "inc.php"; 
        $app = new APP\App();
        $app ->Run(CONFIG\config);
}
?>