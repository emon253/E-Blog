<?php
   session_start();

   unset($_SESSION['user']);

   header('Location: /E-Blog')
?>             