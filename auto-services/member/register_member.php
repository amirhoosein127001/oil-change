<?php
include '../admin/connect.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$access='member';


 $sql = "INSERT INTO `member` (`user`,`access`, `pass`, `email`) VALUES ('$user','$access','$pass','$email')";
 $conn-> query($sql);
 $conn-> close();
//  echo $user;
//  echo '<textarea>'.$_POST['user'].'</textarea>';
 header('Location:ok_registery.php');
?>