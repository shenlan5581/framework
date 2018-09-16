<?php 

/* 
 管理员 

 用户
*/

class Session{
/*admin*/
 static  public function GetAdminID(){
       if(isset($_SESSION['admin'])){
           return $_SESSION['admin'];
       } else {
           return false;
       }
   }
 static  public function SetAdminID($id){
       if(isset($_SESSION['admin'])){
          return false;
       } else {
         $_SESSION['admin'] =  $id;
       }
   }
 static  public function DestoyAdmin(){
           unset($_SESSION['admin']);
   }

 static  public function IsLoginAdmin(){
       if(isset($_SESSION['admin'])){
          return true;
       } else {
           return false;
       }
   }

///// 设置一些数据 
 static  public function Get($k){
       if(isset($_SESSION[$k])){
           return $_SESSION[$k];
       } else {
           return false;
       }
   }
 static  public function Set($k,$v){
       if(isset($_SESSION[$k])){
          return false;
       } else {
         $_SESSION[$k] =$v;
       }
   }
 static  public function Destoy($k){
           unset($_SESSION[$k]);
   }





/*user*/ 
 static  public function GetUserID(){
       if(isset($_SESSION['user'])){
           return $_SESSION['user'];
       } else {
           return false;
       }
   }
 static  public function SetUserID($id){
       if(isset($_SESSION['user'])){
          return false;
       } else {
         $_SESSION['user'] =  $id;
       }
   }
 static  public function DestoyUser(){
           unset($_SESSION['user']);
   }

}