<?php
   //start session
   session_start();
   
   //checking user for sessions
   $user_check = $_SESSION['login_user'];
   $user_type = $_SESSION['usertype'];
   
   
   //checking in database username
   if(!empty($user_check))  {
   $admses = Database::departmentsession($user_check,$user_type);
   }

   if($admses == 1)  {

      $login_session = $user_check;
      $_SESSION['login_user'] = $user_check;
      //echo "session set as $login_session<br>";
   }
   
   if(!isset($_SESSION['login_user'])|| $login_session=='')
   {
      header("location:/department/login");
      //echo "no login user set<br>";
   }
?>