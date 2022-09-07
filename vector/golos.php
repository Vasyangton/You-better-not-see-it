<?php
require_once 'connect.php';

if(isset($_GET['knopka'])){
  mysqli_query($connect, "INSERT INTO `golos` (`id`, `pops`) VALUES (NULL, '1')");
  header('Location: ../index.php');
}
if(isset($_GET['topka'])){
  mysqli_query($connect, "INSERT INTO `golos` (`id`, `pops`) VALUES (NULL, '2')");
  header('Location: ../index.php');
}

?>
