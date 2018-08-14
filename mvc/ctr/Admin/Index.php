<?php

class App_Ctr_Admin_Index{
     public function indexAction(){
     $ctr =new CTRL;
     $ctr->DisplaySmart("uploadimgtest/uploadimg.html");

    }
    public function testAction(){

    $ctr =new CTRL;
     $ctr->DisplaySmart("Admin/image.html");
    }
}
