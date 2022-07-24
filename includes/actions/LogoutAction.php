<?php
session_start();

   unset($_SESSION['userName']);

   header('Location: /E-Blog')
?>             