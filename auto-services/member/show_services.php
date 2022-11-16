<?php
 include '../admin/connect.php';
 echo 'ok connect';
//  $car_name = $_POST['car-name'];
//  $car_model = $_POST['car-model'];
//  $email = $_POST['email'];
//  $date = $_POST['date'];
//  $km_car = $_POST['km-car'];
//  $oil_m_name = $_POST['oil-m-name'];
//  $oil_m_model = $_POST['oil-m-model'];
//  $oil_m_karkerd = $_POST['oil-m-karkerd'];
//  $oil_t = $_POST['oil-t'];
//  $hidrolik = $_POST['hidrolik'];
//  $vaskazin = $_POST['vaskazin'];
//  $comment_oil = $_POST['comment-oil'];
//  $filter_benzin = $_POST['filter-benzin'];
//  $filter_kabin = $_POST['filter-kabin'];
//  $filter_motor = $_POST['filter-motor'];
//  $filter_oil = $_POST['filter-oil'];
//  $comment_filter = $_POST['comment-filter'];
//  $radiat = $_POST['radiat'];
//  $anti_freez = $_POST['anti-freez'];
//  $comment_cooling = $_POST['comment-cooling'];
//  $bad = $_POST['bad'];
//
//
//  $sql = "INSERT INTO `services` (`id`, `car-name`, `car-model`, `email`, `date`, `km-car`, `oil-m-name`, `oil-m-model`, `oil-m-karkerd`, `oil-t`, `hidrolik`, `vaskazin`, `comment-oil`, `filter-benzin`, `filter-kabin`, `filter-motor`, `filter-oil`, `comment-filter`, `radiat`, `anti-freez`, `comment-cooling`, `bad`)
//   VALUES (NULL,'$car_name' ,  '$car_model',  '$email' ,  '$date' ,  '$km_car' ,  '$oil_m_name' ,  '$oil_m_model' ,  '$oil_m_karkerd' ,  '$oil_t' ,  '$hidrolik' ,  '$vaskazin' ,  '$comment_oil' ,  '$filter_benzin' ,  '$filter_kabin' ,  '$filter_motor' ,  '$filter_oil' ,  '$comment_filter' , '$radiat','$anti_freez','$comment_cooling','$bad')";
//  $conn-> query($sql);


//header('Location: index.php');
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <title>سرویس های ثبت شده</title>
    <meta charset="utf-8">
    <link rel="icon" href="../img/icon.png" >

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style-main.css" rel="stylesheet">
<!--    <link href="css/reset_css.css" rel="stylesheet">-->
    <link href="../css/style-save.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div>
        <p class="mt-3 text-left text-dark">
            <a href="" class="btn btn-danger col-lg-0.5">
                  خروج   
            </a>
            دسترسی:
            <?php echo 'مدیر'; ?>
            <?php echo ' | ';?>
            نام:
            <?php echo 'اسم من این است';?>
        </p>
</div>
<div class="container mt-3 all">
    <h1>سرویس های ثبت شده</h1>
        <div class="table-responsive">
        <table class="table table-dark table-striped kadr">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>سازنده خودرو</th>
                <th>مدل</th>
                <th>تاریخ سرویس</th>
                <th>کیلومتر فعلی</th>
                <th>روغن موتور</th>
                <th>مدل</th>
                <th>کارکرد</th>
                <th>روغن ترمز</th>
                <th>روغن هیدرولیک</th>
                <th>روغن گیربکس</th>
                <th>توضیحات</th>
                <th>فیلتر بنزین</th>
                <th>فیلتر کابین</th>
                <th>فیلتر موتور</th>
                <th>فیلتر روغن</th>
                <th>توضیحات</th>
                <th>آب رادیاتور</th>
                <th>ضد یخ</th>
                <th>توضیحات</th>
                <th>تنظیم باد</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo "1"; ?></td>
                <td><?php echo $car_name; ?></td>
                <td><?php echo $car_model; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $km_car; ?></td>
                <td><?php echo $oil_m_name; ?></td>
                <td><?php echo $oil_m_model; ?></td>
                <td><?php echo $oil_m_karkerd; ?></td>
                <td><?php echo $oil_t; ?></td>
                <td><?php echo $hidrolik; ?></td>
                <td><?php echo $vaskazin; ?></td>
                <td><?php echo $comment_oil; ?></td>
                <td><?php echo $filter_benzin; ?></td>
                <td><?php echo $filter_kabin; ?></td>
                <td><?php echo $filter_motor; ?></td>
                <td><?php echo $filter_oil; ?></td>
                <td><?php echo $comment_filter; ?></td>
                <td><?php echo $radiat; ?></td>
                <td><?php echo $anti_freez; ?></td>
                <td><?php echo $comment_cooling; ?></td>
                <td><?php echo $bad; ?></td>
                <td>
                    <button name="edite" class="mt-1 btn btn-success"> ویرایش </button>
                    <button name="del" class="mt-1 btn btn-warning"> حذف </button>
                </td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- فوتر -->
<?php include '../footer.php';$conn-> close(); ?>

</body>
</html>

