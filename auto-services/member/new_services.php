<!doctype html>
<html lang="fa">
<head>    
    <meta charset="UTF-8">

    <!-- عنوان تب -->
    <title>ثبت</title>

    <!-- icon -->
    <link rel="ico" href="img/icon.png">

    <!-- لینک استایل ها -->
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/style-new.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/jquery.Bootstrap-PersianDateTimePicker.css" />
    <link rel="icon" href="img/icon.png" >

    <!-- لینک جاوا JQuery&JS -->
    <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
<div style="margin-top: 50px; clear: both;"></div>
<div class="col-lg-3">
        <p class="mt-3 text-left" style="position: fixed;top: 0">
            <a href="" style="width:70px" class="btn btn-danger">خروج</a>
            نام:
            <?php echo 'اسم من این است';?>
            <?php echo ' | ';?>
            دسترسی:
            <?php echo 'مدیر'; ?> 
        </p>
</div>
<div class="container" style="max-width: 45%;">
    <p class="mtn text-info">ثــــبـت سـرویـس جدیـد</p>

    <!-- فرم -->
<form action="show_services.php" id="new-form" name="new-form" method="post" class="was-validated">

    <!-- مشخصات -->
    <div class="kadr" style="background: gray;">
        <fieldset>
            <legend class="farsi form-label" style="text-align:center">مشخصات خودرو</legend>
            <p class="farsi">شرکت سازنده خودرو</p>
            <input class="form-control farsi" type="text" name="car-name" placeholder="مثال: پژو" required>
            <div class="invalid-feedback">لطفا اطلاعات را صحیح وارد کنید</div>
            <br/>

            <p class="farsi">مدل خودرو</p>
            <input class="form-control farsi"  type="text" name="car-model" placeholder="مثال: 206" required>
            <br/>

            <p class="farsi">ایمیل</p>
            <input class="form-control farsi" type="text" name="email" placeholder="ایمیل خود را وارد کنید..." required>
            <br/>

            <p class="farsi">تاریخ سرویس</p>
            <div class="form-group">
                <label class="sr-only" for="exampleInput3">تاریخ</label>
                <div class="input-group">
                    <div class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#exampleInput3">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    <input type="text" name="date" class="form-control farsi" id="exampleInput3" placeholder="تاریخ" data-mddatetimepicker="true" data-placement="right" data-englishnumber="true" required>
                </div>
            </div>

            <p class="farsi">کیلومتر فعلی خودرو</p>
            <input class="form-control farsi"  type="number" name="km-car" id="km-car" placeholder="مثال: 300000" required>
            <p id="demo"></p>
            <br/>
        </fieldset>
    </div>

    <!-- روغن ها -->
    <div class="kadr" style="background:#FCF3CF;">
        <fieldset class="text-secondary">
            <legend class="farsi" style="text-align:center">روغن ها</legend>
            <p class="farsi">روغن موتور</p> 
            <span>نام</span><input class="form-control farsi" type="text" name="oil-m-name" placeholder="مثال: زیرول/Xerol" required>
            <span>مدل</span><input class="form-control farsi" type="text" name="oil-m-model" placeholder="مثال: 20W-50" required>
            <span>کارکرد</span><input class="form-control farsi" type="number" name="oil-m-karkerd" placeholder="عدد به کیلومتر" required>
            <br/>
            <div class="row">
                <div class="col-lg-6">
                    <label for="oil-t">ترمز</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="oil-t" value="بازدید"></label>
                    <label class="radio-inline">تعویض<input type="radio" name="oil-t" value="تعویض"></label>
                </div>
                <div class="col-lg-6">
                    <label for="hidrolik">هیدرولیک</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="hidrolik" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="hidrolik" value="تعویض" required></label>
                </div>
                <div class="col-lg-12">
                    <label for="vaskazin">گیربکس</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="vaskazin" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="vaskazin" value="تعویض" required></label>
                </div>
            </div>
            <br>
            <label for="comment input-group-addon">توضیحات</label>
            <textarea name="comment-oil" class="form-control" rows="3" id="comment-oil"></textarea>
        </fieldset>
    </div>

    <!-- فیلترها -->
    <div class="kadr" style="background:#00ccff">
        <fieldset>
            <legend class="farsi" style="text-align:center">فیلتر ها</legend>
            <div class="row">
                <div class="col-lg-5">
                    <label for="filter-benzin">بنزین</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="filter-benzin" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="filter-benzin" value="تعویض" required></label>
                </div>
                <div class="col-lg-5">
                    <label for="filter-kabin">کابین</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="filter-kabin" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="filter-kabin" value="تعویض" required></label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <label for="filter-motor">موتور</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="filter-motor" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="filter-motor" value="تعویض" required></label>
                </div>
                <div class="col-lg-5">
                    <label for="filter-oil">روغن</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="filter-oil" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="filter-oil" value="تعویض" required></label>
                </div>

            </div>
            <label for="comment input-group-addon">توضیحات</label>
            <textarea class="form-control" rows="3" name="comment-filter"></textarea>
        </fieldset>
    </div>

    <!-- رادیاتور -->
    <div class="kadr" style="background:#6495ED">
        <fieldset>
            <legend class="farsi" style="text-align:center">سیستم خنک کاری</legend>
            <div class="row">
                <div class="col-lg-6">
                    <label for="radiat">آب رادیاتور</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="radiat" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="radiat" value="تعویض" required></label>
                </div>
                <div class="col-lg-6">
                    <label for="anti-freez">ضد یخ</label>
                    <label>  </label>
                    <label class="radio-inline">بازدید<input type="radio" name="anti-freez" value="بازدید" required></label>
                    <label class="radio-inline">تعویض<input type="radio" name="anti-freez" value="تعویض" required></label>
                </div>
            </div>
            <label for="comment input-group-addon">توضیحات</label>
            <textarea class="form-control" rows="3" name="comment-cooling"></textarea>
        </fieldset>
    </div>

    <!--    باد لاستیک-->
    <div class="kadr" style="background:#AAB7B8">
        <fieldset>
            <legend class="farsi" style="text-align:center">تنظیم باد</legend>
            <div class="col-lg-11">
                <div class="col-lg-6"></div>
                <div class="col-lg-2">
                    <label class="radio-inline"> خیر <input type="radio" name="bad" value="خیر" required></label>
                </div>
                <div class="col-lg-2">
                    <label class="radio-inline"> بلی <input type="radio" name="bad" value="بلی" required></label>
                </div>
                <label class="col-lg-2" for="bad">لاستیک</label>
            </div>
        </fieldset>
    </div>

    <!-- کلید ها -->
    <div class="btns btn-group row col-lg-11 btns">
        <a href="index.html" class="btn btn-primary">بازگشت</a>
        <input type="reset" class="btn btn-primary" value="پاک سازی">
        <input type="submit" class="btn btn-success" form="new-form" value="ثبت">
    </div>

</from>
</div>

<!-- فوتر -->
<div class="footer" style="">
    Copyright © 1400 AH ☺
</div>

<!-- کد های تقویم شمسی -->
<script type="text/javascript">
    $('#input1').change(function() {
        var $this = $(this),
                value = $this.val();
        alert(value);
    });
    $('#textbox1').change(function () {
        var $this = $(this),
                value = $this.val();
        alert(value);
    });
    $('[data-name="disable-button"]').click(function() {
        $('[data-mddatetimepicker="true"][data-targetselector="#input1"]').MdPersianDateTimePicker('disable', true);
    });
    $('[data-name="enable-button"]').click(function () {
        $('[data-mddatetimepicker="true"][data-targetselector="#input1"]').MdPersianDateTimePicker('disable', false);
    });
</script>
<script src="js/jalaali.js" type="text/javascript"></script>
<script src="js/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>
<?php include 'footer.php'; ?>


</script>
</body>
</html> 