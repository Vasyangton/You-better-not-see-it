<?php

  session_start();
  require_once 'connect.php';

  $tell = $_POST['tell'];
  $pass = $_POST['pass'];
  $pass = md5($pass);

  $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `tell` = '$tell' AND `password` = '$pass'");

  if (mysqli_num_rows($check)>0){

    $user = mysqli_fetch_assoc($check);

    $_SESSION['user'] = [
      "name" => $user['name']
    ];

    header('Location: ../index.php');

    } else {
      $_SESSION['message'] = 'Не верный логин или пароль';
      header('Location: ../signin.php');
    }

?>
