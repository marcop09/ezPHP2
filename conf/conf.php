<?php
  require 'dbh.php';

  $authapp = true; // Authentication

  if ($authapp) {
    require '../controllers/auth-controller.php';
  }
?>
