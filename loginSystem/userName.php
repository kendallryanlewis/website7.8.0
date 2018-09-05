<?php
   //Start your session
   session_start();
   //Read your session (if it is set)
   if (isset($_SESSION['valid_user']))
      echo $_SESSION['valid_user'];
?>