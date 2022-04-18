<?php
  // Connect to your database here
  function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
      return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
  }

  if (isLocalhost()) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "framework";
  } else {
    $host = "server";
    $user = "server";
    $pass = "server";
    $name = "server";
  }

  $config = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
  );

  try {
    $conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass, $config);
    return $conn;
  } catch (PDOException $e) {
    echo "Database connection failed. Please try again later.";
    exit;
  }
?>
