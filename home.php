<?php
  // Require ezPHP
  require 'conf/conf.php';

  // Restrict acccess if not logged in
  middleware("user");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome Home</title>
  </head>
  <body>
    <h1>Hello <?=$user->username?></h1>
  </body>
</html>
