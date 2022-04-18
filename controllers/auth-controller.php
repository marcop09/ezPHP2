<?php
  // Authentication

  // Variables
  $isset = isset($_SESSION['id']);

  if ($isset) {
    $loggedin = true;
  } else {
    $loggedin = false;
  }

  if ($loggedin) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bindValue(1, $user->id);
    $stmt->execute();

    $user = $stmt->fetchObject();
  }

  // Middleware
  function middleware($middleware) {
    global $loggedin;

    if ($middleware == "guest" && $loggedin) {
      header("Location: /home.php");
    } elseif ($middleware == "user" && !$loggedin) {
      header("Location: /login.php");
    }
  }

  // Login
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pass = crypt($password);

    $stmt2 = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt2->bindValue(1, $username);
    $stmt2->bindValue(2, $pass);
    $stmt2->execute();

    $user2 = $stmt2->fetchObject();

    if ($stmt2->rowCount() == 1) {
      /*$stmt3 = $conn->prepare("INSERT INTO users (username, password, creationdate) VALUES (?, ?, ?)");
      $stmt3->bindValue(1, $username);
      $stmt3->bindValue(2, $pass);
      $stmt3->bindValue(3, time());
      $stmt3->execute();*/
      $_SESSION['id'] = $user2->id;
      header("Location: /home");
    } else {
      die("No user found.");
    }
  }
?>
