<?php
  // Require ezPHP
  require 'conf/conf.php';

  // Restrict acccess if logged in
  middleware("guest");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form method="post">
      <h2>Login</h2>
      <input type="text" name="username" placeholder="Username">
      <input type="pass" name="password" placeholder="Password">
      <button type="submit" name="login">Login</button>
    </form>
  </body>
</html>
