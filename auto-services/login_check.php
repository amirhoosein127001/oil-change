<?php
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $admin=$_POST['admin'];
    if ($_POST['user'] =='' || $_POST['pass'] =='' || $_POST['admin'] ==''){
    echo 'فرم خالی است';
    }else{
        include 'admin/connect.php';
        $sql = "SELECT `id`, `access`, `user`, `pass`, `email` FROM member WHERE access='member'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $result="";
            $sql = "SELECT `id`, `access`, `user`, `pass`, `email` FROM member WHERE user=$user AND pass=$pass";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                header('Location: member/index.php');
            }else{
                header('Location: index.php');
            }
            } else {
                echo "<b>کاربر موجود نیست</b>";
            }
    $conn->close();
    }
?>