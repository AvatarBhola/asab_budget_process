<?php
require_once './php/db_connect.php';
      session_start();
      if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
      $loggedin = TRUE;
      $userstr = "$user";
      }
      else {
          $loggedin = FALSE;
      }
      if ($loggedin == FALSE){
//          echo $user;
//          destroy_session_and_data();
          destroySession();
         header('Location: http://lamp.cse.fau.edu/~mgalluscio2016/fau');
      }
      
?>