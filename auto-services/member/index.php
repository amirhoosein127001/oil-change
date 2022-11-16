<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style-index.css">
    <link rel="stylesheet" href="../css/style-main.css">
    <link rel="icon" href="../img/icon.png" >

    <style>

    </style>
</head>
<body>

<h2><?php echo $user; ?>خوش آمدی </h2>
<div class="container btns" >
    <button onclick="document.getElementById('login').style.display='block'" style="width:auto;">ثبت سرویس جدید</button>
    <button onclick="document.getElementById('register').style.display='block'" style="width:auto;">نمایش سرویس های ثبت شده</button>
</div>

<?php
include '../footer.php';
  ?>

</body>
</html>