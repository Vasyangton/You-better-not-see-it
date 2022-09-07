<?php

  session_start();
  require_once 'connect.php';

  $name = $_POST['name'];
  $tell = $_POST['tell'];
  $pass = $_POST['pass'];
  $pass_conf = $_POST['pass_conf'];

  if ($pass === $pass_conf) {

    $pass = md5($pass);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `tell`, `password`) VALUES (NULL, '$name', '$tell', '$pass')");
    header('Location: ../info1.html');

  } else {

    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registration.php');

  }

 ?>
