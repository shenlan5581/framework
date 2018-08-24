<?php 

class Session{
 static  public function GetUserID(){
       if(isset($_SESSION['user'])&&isset($_SESSION['user_id'])){
           return $_SESSION['user_id'];
       } else {
           return false;
       }
   }
 static  public function SetUser($user,$id){
       if(isset($_SESSION['user'])&&isset($_SESSION['user_id'])){
          return false;
       } else {
         $_SESSION['user'] =    $user;
         $_SESSION['user_id'] = $id;
       }
   }
 static  public function DestoyUser(){
           unset($_SESSION['user']);
           unset($_SESSION['user_id']);
   }
 static  public function Islogin(){
     if(isset($_SESSION['user'])&&isset($_SESSION['user_id'])){
        return true;
     } else {
        return false;
     }
 }
}