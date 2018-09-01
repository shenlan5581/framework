<?php
include_once "Base.php";
class App_Controller_Manage_Slide extends Base_Manage{
      //  幻灯列表
    public function IndexAction(){
        $this->ctr->DisplaySmart('/Manage/Slide/slide.html');
       }






}